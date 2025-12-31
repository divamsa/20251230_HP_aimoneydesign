@extends('layouts.public')

@section('title', 'ブログ記事管理（一覧） - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">ブログ記事管理（一覧）</h1>
    <p class="page-subtitle">ブログ記事の一覧を表示します</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div style="margin-bottom: 1.5rem;">
        <a href="{{ route('admin.posts.create') }}" class="btn">新規作成</a>
    </div>

    <div class="card">
        <h2 class="section-title">一覧</h2>
        <div style="overflow:auto;">
            <table style="width:100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">ID</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">タイトル</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">カテゴリ</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">公開日時</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">作成日時</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $post->id }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $post->title }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">
                                @if($post->category)
                                    {{ $post->category->name }}
                                @else
                                    <span style="color:#999;">カテゴリなし</span>
                                @endif
                            </td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">
                                @if($post->published_at)
                                    {{ $post->published_at->format('Y-m-d H:i') }}
                                @else
                                    <span style="color:#999;">下書き</span>
                                @endif
                            </td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $post->created_at->format('Y-m-d H:i') }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">
                                <a class="btn" href="{{ route('admin.posts.show', $post) }}">詳細</a>
                                <a class="btn" href="{{ route('admin.posts.edit', $post) }}" style="margin-left:.5rem; background:#3b82f6;">編集</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="padding:1rem;">データがありません</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div style="margin-top: 1rem;">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection

