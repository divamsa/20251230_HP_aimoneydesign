<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Services\ImageGenerationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,png,gif,webp', 'max:5120'], // 最大5MB
        ], [
            'title.required' => 'タイトルを入力してください。',
            'title.max' => 'タイトルは255文字以内で入力してください。',
            'content.required' => '本文を入力してください。',
            'category_id.exists' => '選択されたカテゴリは無効です。',
            'thumbnail.image' => '画像ファイルを選択してください。',
            'thumbnail.mimes' => '画像形式はJPEG、PNG、GIF、WebPのいずれかです。',
            'thumbnail.max' => '画像サイズは5MB以下にしてください。',
        ]);

        // 画像がアップロードされた場合
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('posts', 'public');
            $validated['thumbnail_path'] = $thumbnailPath;
        } else {
            // 画像がアップロードされていない場合、タイトルから自動生成
            $imageService = app(ImageGenerationService::class);
            $thumbnailPath = $imageService->generateThumbnail($validated['title']);

            if ($thumbnailPath) {
                $validated['thumbnail_path'] = $thumbnailPath;
            }
        }

        Post::create($validated);

        $message = 'ブログ記事を作成しました。';
        if (isset($validated['thumbnail_path'])) {
            $message .= $request->hasFile('thumbnail') ? ' サムネイル画像をアップロードしました。' : ' サムネイル画像も生成されました。';
        }

        return redirect()
            ->route('admin.posts.index')
            ->with('success', $message);
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
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,png,gif,webp', 'max:5120'], // 最大5MB
            'remove_thumbnail' => ['nullable', 'boolean'],
        ], [
            'title.required' => 'タイトルを入力してください。',
            'title.max' => 'タイトルは255文字以内で入力してください。',
            'content.required' => '本文を入力してください。',
            'category_id.exists' => '選択されたカテゴリは無効です。',
            'thumbnail.image' => '画像ファイルを選択してください。',
            'thumbnail.mimes' => '画像形式はJPEG、PNG、GIF、WebPのいずれかです。',
            'thumbnail.max' => '画像サイズは5MB以下にしてください。',
        ]);

        $imageService = app(ImageGenerationService::class);

        // 画像を削除する場合
        if ($request->has('remove_thumbnail') && $request->remove_thumbnail) {
            if ($post->thumbnail_path) {
                $imageService->deleteThumbnail($post->thumbnail_path);
                $validated['thumbnail_path'] = null;
            }
        }
        // 新しい画像がアップロードされた場合
        elseif ($request->hasFile('thumbnail')) {
            // 既存の画像を削除
            if ($post->thumbnail_path) {
                $imageService->deleteThumbnail($post->thumbnail_path);
            }
            
            // 新しい画像を保存
            $thumbnailPath = $request->file('thumbnail')->store('posts', 'public');
            $validated['thumbnail_path'] = $thumbnailPath;
        }
        // タイトルが変更された場合、自動生成された画像を再生成
        elseif ($post->title !== $validated['title'] && $post->thumbnail_path && strpos($post->thumbnail_path, 'thumbnails/') === 0) {
            // 既存のサムネイルを削除（自動生成されたもののみ）
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
