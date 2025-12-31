@extends('layouts.public')

@section('title', 'ブログ記事詳細 - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">ブログ記事詳細</h1>

    @if(session('success'))
        <x-alert type="success" dismissible="true">{{ session('success') }}</x-alert>
    @endif

    <div class="card">
        <h2 class="section-title">記事情報</h2>
        <dl style="display:grid; grid-template-columns: 150px 1fr; gap:1rem; margin-bottom:1rem;">
            <dt style="font-weight:bold;">ID:</dt>
            <dd>{{ $post->id }}</dd>
            <dt style="font-weight:bold;">タイトル:</dt>
            <dd>{{ $post->title }}</dd>
            <dt style="font-weight:bold;">カテゴリ:</dt>
            <dd>
                @if($post->category)
                    <a href="{{ route('admin.categories.show', $post->category) }}" style="color:#3b82f6; text-decoration:none;">{{ $post->category->name }}</a>
                @else
                    <span style="color:#999;">カテゴリなし</span>
                @endif
            </dd>
            <dt style="font-weight:bold;">公開日時:</dt>
            <dd>
                @if($post->published_at)
                    <span style="color:#10b981; font-weight:bold;">{{ $post->published_at->format('Y-m-d H:i') }}</span>
                    @if($post->published_at->isFuture())
                        <span style="color:#f59e0b; margin-left:.5rem;">（予約公開）</span>
                    @else
                        <span style="color:#10b981; margin-left:.5rem;">（公開中）</span>
                    @endif
                @else
                    <span style="color:#999;">下書き</span>
                @endif
            </dd>
            @if($post->thumbnail_path)
            <dt style="font-weight:bold;">サムネイル:</dt>
            <dd>
                <img src="{{ Storage::url($post->thumbnail_path) }}" 
                     alt="サムネイル" 
                     style="max-width:200px; height:auto; border-radius:4px; border:1px solid #e0e0e0;">
            </dd>
            @endif
            <dt style="font-weight:bold;">作成日時:</dt>
            <dd>{{ $post->created_at->format('Y-m-d H:i') }}</dd>
            <dt style="font-weight:bold;">更新日時:</dt>
            <dd>{{ $post->updated_at->format('Y-m-d H:i') }}</dd>
        </dl>
    </div>

    <div class="card">
        <h2 class="section-title">本文</h2>
        <div style="white-space:pre-wrap; line-height:1.8;">{{ $post->content }}</div>
    </div>

    <div style="margin-top: 1.5rem;">
        <a href="{{ route('admin.posts.edit', $post) }}" class="btn">編集</a>
        <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" style="display:inline-block; margin-left:.5rem;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn" style="background:#dc2626;" onclick="return confirm('本当に削除しますか？')">削除</button>
        </form>
        <a href="{{ route('admin.posts.index') }}" class="btn" style="margin-left:.5rem; background:#64748b;">一覧に戻る</a>
    </div>
</div>
@endsection

