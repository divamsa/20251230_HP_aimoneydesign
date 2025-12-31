@extends('layouts.public')

@section('title', 'カテゴリ管理（一覧） - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">カテゴリ管理（一覧）</h1>
    <p class="page-subtitle">ブログ記事のカテゴリを管理します</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div style="margin-bottom: 1.5rem;">
        <a href="{{ route('admin.categories.create') }}" class="btn">新規作成</a>
    </div>

    <div class="card">
        <h2 class="section-title">一覧</h2>
        <div style="overflow:auto;">
            <table style="width:100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">ID</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">カテゴリ名</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">スラッグ</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">記事数</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $category->id }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $category->name }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $category->slug }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $category->posts()->count() }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">
                                <a class="btn" href="{{ route('admin.categories.show', $category) }}">詳細</a>
                                <a class="btn" href="{{ route('admin.categories.edit', $category) }}" style="margin-left:.5rem; background:#3b82f6;">編集</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="padding:1rem;">データがありません</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



