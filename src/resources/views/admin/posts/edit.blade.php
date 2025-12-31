@extends('layouts.public')

@section('title', 'ブログ記事編集 - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">ブログ記事編集</h1>

    @if($errors->any())
        <x-alert type="error" dismissible="false">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif

    <form method="POST" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">タイトル <span style="color:red;">*</span></label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">カテゴリ</label>
            <select id="category_id" name="category_id">
                <option value="">カテゴリなし</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $post->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="thumbnail">サムネイル画像</label>
            @if($post->thumbnail_path)
                <div style="margin-bottom:1rem;">
                    <img src="{{ Storage::url($post->thumbnail_path) }}" 
                         alt="現在のサムネイル" 
                         style="max-width:400px; height:auto; border-radius:8px; border:1px solid #e0e0e0;">
                </div>
            @endif
            <input type="file" id="thumbnail" name="thumbnail" accept="image/jpeg,image/png,image/gif,image/webp">
            <p style="margin-top:.5rem; color:#666; font-size:.875rem;">
                対応形式: JPEG, PNG, GIF, WebP（推奨サイズ: 1200x675px、16:9のアスペクト比）
            </p>
            <p style="margin-top:.5rem; color:#999; font-size:.875rem;">
                新しい画像をアップロードすると、既存の画像が置き換えられます。
            </p>
            @if($post->thumbnail_path)
                <label style="display:flex; align-items:center; margin-top:.5rem;">
                    <input type="checkbox" name="remove_thumbnail" value="1">
                    <span style="margin-left:.5rem;">画像を削除する</span>
                </label>
            @endif
        </div>

        <div class="form-group">
            <label for="content">本文 <span style="color:red;">*</span></label>
            <textarea id="content" name="content" rows="15" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="form-group">
            <label for="published_at">公開日時</label>
            <div style="display:flex; align-items:center; gap:1rem; flex-wrap:wrap;">
                <input type="datetime-local" id="published_at" name="published_at" value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}" style="flex:1; min-width:200px;">
                <button type="button" onclick="document.getElementById('published_at').value=''" class="btn" style="background:#64748b; white-space:nowrap;">クリア（下書きに）</button>
                <button type="button" onclick="document.getElementById('published_at').value=new Date().toISOString().slice(0,16)" class="btn" style="background:#3b82f6; white-space:nowrap;">現在日時</button>
            </div>
            <p style="margin-top:.5rem; color:#666; font-size:.875rem;">
                未設定の場合は下書きとして保存されます。公開日時を設定すると、その日時以降に公開されます。
            </p>
            @if($post->published_at)
                <p style="margin-top:.5rem; color:#10b981; font-size:.875rem;">
                    ✓ 現在公開中（公開日時: {{ $post->published_at->format('Y年m月d日 H:i') }}）
                </p>
            @else
                <p style="margin-top:.5rem; color:#f59e0b; font-size:.875rem;">
                    ⚠ 現在下書き状態です
                </p>
            @endif
        </div>

        <div style="margin-top: 1.5rem;">
            <button type="submit" class="btn">更新</button>
            <a href="{{ route('admin.posts.show', $post) }}" class="btn" style="margin-left:.5rem; background:#64748b;">キャンセル</a>
        </div>
    </form>
</div>
@endsection

