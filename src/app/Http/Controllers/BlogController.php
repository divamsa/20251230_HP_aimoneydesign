<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * ブログ一覧ページを表示
     */
    public function index()
    {
        $posts = Post::published()
            ->orderByDesc('published_at')
            ->paginate(10);

        return view('blog.index', [
            'posts' => $posts,
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

        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
