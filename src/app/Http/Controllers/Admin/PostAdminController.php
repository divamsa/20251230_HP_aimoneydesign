<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Services\ImageGenerationService;
use Illuminate\Http\Request;

class PostAdminController extends Controller
{
    /**
     * ブログ記事一覧を表示
     */
    public function index()
    {
        $posts = Post::with('category')
            ->orderByDesc('created_at')
            ->paginate(20);

        return view('admin.posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * ブログ記事作成フォームを表示
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.posts.create', [
            'categories' => $categories,
        ]);
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
            'category_id' => ['nullable', 'exists:categories,id'],
        ], [
            'title.required' => 'タイトルを入力してください。',
            'title.max' => 'タイトルは255文字以内で入力してください。',
            'content.required' => '本文を入力してください。',
            'category_id.exists' => '選択されたカテゴリは無効です。',
        ]);

        // サムネイル画像を生成
        $imageService = app(ImageGenerationService::class);
        $thumbnailPath = $imageService->generateThumbnail($validated['title']);

        if ($thumbnailPath) {
            $validated['thumbnail_path'] = $thumbnailPath;
        }

        Post::create($validated);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'ブログ記事を作成しました。' . ($thumbnailPath ? ' サムネイル画像も生成されました。' : ''));
    }

    /**
     * ブログ記事詳細を表示
     */
    public function show(Post $post)
    {
        $post->load('category');

        return view('admin.posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * ブログ記事編集フォームを表示
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => $categories,
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
            'category_id' => ['nullable', 'exists:categories,id'],
        ], [
            'title.required' => 'タイトルを入力してください。',
            'title.max' => 'タイトルは255文字以内で入力してください。',
            'content.required' => '本文を入力してください。',
            'category_id.exists' => '選択されたカテゴリは無効です。',
        ]);

        // タイトルが変更された場合、新しいサムネイル画像を生成
        if ($post->title !== $validated['title']) {
            $imageService = app(ImageGenerationService::class);
            
            // 既存のサムネイルを削除
            $imageService->deleteThumbnail($post->thumbnail_path);
            
            // 新しいサムネイルを生成
            $thumbnailPath = $imageService->generateThumbnail($validated['title']);
            
            if ($thumbnailPath) {
                $validated['thumbnail_path'] = $thumbnailPath;
            }
        }

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
        // サムネイル画像を削除
        $imageService = app(ImageGenerationService::class);
        $imageService->deleteThumbnail($post->thumbnail_path);

        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'ブログ記事を削除しました。');
    }
}
