@extends('layouts.public')

@section('title', 'カテゴリ詳細 - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">カテゴリ詳細</h1>

    @if(session('success'))
        <x-alert type="success" dismissible="true">{{ session('success') }}</x-alert>
    @endif

    <div class="card">
        <h2 class="section-title">カテゴリ情報</h2>
        <dl style="display:grid; grid-template-columns: 150px 1fr; gap:1rem; margin-bottom:1rem;">
            <dt style="font-weight:bold;">ID:</dt>
            <dd>{{ $category->id }}</dd>
            <dt style="font-weight:bold;">カテゴリ名:</dt>
            <dd>{{ $category->name }}</dd>
            <dt style="font-weight:bold;">スラッグ:</dt>
            <dd>{{ $category->slug }}</dd>
            <dt style="font-weight:bold;">記事数:</dt>
            <dd>{{ $category->posts()->count() }}件</dd>
            <dt style="font-weight:bold;">作成日時:</dt>
            <dd>{{ $category->created_at->format('Y-m-d H:i') }}</dd>
            <dt style="font-weight:bold;">更新日時:</dt>
            <dd>{{ $category->updated_at->format('Y-m-d H:i') }}</dd>
        </dl>
    </div>

    <div style="margin-top: 1.5rem;">
        <a href="{{ route('admin.categories.edit', $category) }}" class="btn">編集</a>
        <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" style="display:inline-block; margin-left:.5rem;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn" style="background:#dc2626;" onclick="return confirm('本当に削除しますか？')">削除</button>
        </form>
        <a href="{{ route('admin.categories.index') }}" class="btn" style="margin-left:.5rem; background:#64748b;">一覧に戻る</a>
    </div>

    @if($posts->count() > 0)
        <div class="card" style="margin-top: 2rem;">
            <h2 class="section-title">このカテゴリに紐づく記事（{{ $posts->total() }}件）</h2>
            <div style="overflow:auto;">
                <table style="width:100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">ID</th>
                            <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">タイトル</th>
                            <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">公開日時</th>
                            <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $post->id }}</td>
                                <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $post->title }}</td>
                                <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">
                                    @if($post->published_at)
                                        {{ $post->published_at->format('Y-m-d H:i') }}
                                    @else
                                        <span style="color:#999;">下書き</span>
                                    @endif
                                </td>
                                <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">
                                    <a class="btn" href="{{ route('admin.posts.show', $post) }}">詳細</a>
                                    <a class="btn" href="{{ route('admin.posts.edit', $post) }}" style="margin-left:.5rem; background:#3b82f6;">編集</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div style="margin-top: 1rem;">
                {{ $posts->links() }}
            </div>
        </div>
    @else
        <div class="card" style="margin-top: 2rem;">
            <p>このカテゴリに紐づく記事はありません。</p>
        </div>
    @endif
</div>
@endsection



