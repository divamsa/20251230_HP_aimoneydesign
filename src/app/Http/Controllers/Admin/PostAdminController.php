<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostAdminController extends Controller
{
    /**
     * ブログ記事一覧を表示
     */
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->paginate(20);

        return view('admin.posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * ブログ記事作成フォームを表示
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * ブログ記事を保存
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'published_at' => ['nullable', 'date'],
        ], [
            'title.required' => 'タイトルを入力してください。',
            'title.max' => 'タイトルは255文字以内で入力してください。',
            'content.required' => '本文を入力してください。',
        ]);

        Post::create($validated);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'ブログ記事を作成しました。');
    }

    /**
     * ブログ記事詳細を表示
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * ブログ記事編集フォームを表示
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * ブログ記事を更新
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'published_at' => ['nullable', 'date'],
        ], [
            'title.required' => 'タイトルを入力してください。',
            'title.max' => 'タイトルは255文字以内で入力してください。',
            'content.required' => '本文を入力してください。',
        ]);

        $post->update($validated);

        return redirect()
            ->route('admin.posts.show', $post)
            ->with('success', 'ブログ記事を更新しました。');
    }

    /**
     * ブログ記事を削除
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'ブログ記事を削除しました。');
    }
}
