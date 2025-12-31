@extends('layouts.public')

@section('title', 'ブログ記事作成 - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">ブログ記事作成</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">タイトル <span style="color:red;">*</span></label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">カテゴリ</label>
            <select id="category_id" name="category_id">
                <option value="">カテゴリなし</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="thumbnail">サムネイル画像</label>
            <input type="file" id="thumbnail" name="thumbnail" accept="image/jpeg,image/png,image/gif,image/webp">
            <p style="margin-top:.5rem; color:#666; font-size:.875rem;">
                対応形式: JPEG, PNG, GIF, WebP（推奨サイズ: 1200x675px、16:9のアスペクト比）
            </p>
            <p style="margin-top:.5rem; color:#999; font-size:.875rem;">
                画像をアップロードしない場合、タイトルから自動生成されます。
            </p>
        </div>

        <div class="form-group">
            <label for="content">本文 <span style="color:red;">*</span></label>
            <textarea id="content" name="content" rows="15" required>{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="published_at">公開日時（未設定の場合は下書き）</label>
            <input type="datetime-local" id="published_at" name="published_at" value="{{ old('published_at') }}">
        </div>

        <div style="margin-top: 1.5rem;">
            <button type="submit" class="btn">作成</button>
            <a href="{{ route('admin.posts.index') }}" class="btn" style="margin-left:.5rem; background:#64748b;">キャンセル</a>
        </div>
    </form>
</div>
@endsection

