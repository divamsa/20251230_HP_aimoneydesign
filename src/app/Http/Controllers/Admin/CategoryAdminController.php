<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryAdminController extends Controller
{
    /**
     * カテゴリ一覧を表示
     */
    public function index()
    {
        // N+1問題を回避するため、記事数を事前に取得
        $categories = Category::withCount('posts')
            ->orderBy('name')
            ->get();

        return view('admin.categories.index', [
            'categories' => $categories,
        ]);
    }

    /**
     * カテゴリ作成フォームを表示
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * カテゴリを保存
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:categories,name'],
        ], [
            'name.required' => 'カテゴリ名を入力してください。',
            'name.max' => 'カテゴリ名は255文字以内で入力してください。',
            'name.unique' => 'このカテゴリ名は既に使用されています。',
        ]);

        Category::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
        ]);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'カテゴリを作成しました。');
    }

    /**
     * カテゴリ詳細を表示
     */
    public function show(Category $category)
    {
        // このカテゴリに紐づく記事を取得
        $posts = $category->posts()
            ->orderByDesc('created_at')
            ->paginate(20);

        return view('admin.categories.show', [
            'category' => $category,
            'posts' => $posts,
        ]);
    }

    /**
     * カテゴリ編集フォームを表示
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
        ]);
    }

    /**
     * カテゴリを更新
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:categories,name,' . $category->id],
        ], [
            'name.required' => 'カテゴリ名を入力してください。',
            'name.max' => 'カテゴリ名は255文字以内で入力してください。',
            'name.unique' => 'このカテゴリ名は既に使用されています。',
        ]);

        $category->update([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
        ]);

        return redirect()
            ->route('admin.categories.show', $category)
            ->with('success', 'カテゴリを更新しました。');
    }

    /**
     * カテゴリを削除
     */
    public function destroy(Category $category)
    {
        // カテゴリに紐づく記事がある場合は削除できない
        if ($category->posts()->count() > 0) {
            return redirect()
                ->route('admin.categories.index')
                ->with('error', 'このカテゴリには記事が紐づいているため削除できません。');
        }

        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'カテゴリを削除しました。');
    }
}
