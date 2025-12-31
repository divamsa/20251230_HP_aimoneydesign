<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * ブログ一覧ページを表示
     */
    public function index(Request $request)
    {
        $categoryId = $request->query('category');

        $posts = Post::published()
            ->with('category')
            ->when($categoryId, fn ($q) => $q->where('category_id', $categoryId))
            ->orderByDesc('published_at')
            ->paginate(10)
            ->withQueryString();

        $categories = Category::orderBy('name')->get();

        return view('blog.index', [
            'posts' => $posts,
            'categories' => $categories,
            'selectedCategoryId' => $categoryId,
        ]);
    }

    /**
     * ブログ記事詳細ページを表示
     */
    public function show(Post $post)
    {
        // 公開されていない記事は404
        if (!$post->published_at || $post->published_at->isFuture()) {
            abort(404);
        }

        // カテゴリも一緒に取得
        $post->load('category');

        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
