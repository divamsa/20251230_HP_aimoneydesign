@extends('layouts.public')

@section('title', 'ブログ記事編集 - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">ブログ記事編集</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.posts.update', $post) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">タイトル <span style="color:red;">*</span></label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="form-group">
            <label for="content">本文 <span style="color:red;">*</span></label>
            <textarea id="content" name="content" rows="15" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="form-group">
            <label for="published_at">公開日時（未設定の場合は下書き）</label>
            <input type="datetime-local" id="published_at" name="published_at" value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}">
        </div>

        <div style="margin-top: 1.5rem;">
            <button type="submit" class="btn">更新</button>
            <a href="{{ route('admin.posts.show', $post) }}" class="btn" style="margin-left:.5rem; background:#64748b;">キャンセル</a>
        </div>
    </form>
</div>
@endsection

