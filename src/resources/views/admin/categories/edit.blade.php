@extends('layouts.public')

@section('title', 'カテゴリ編集 - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">カテゴリ編集</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.categories.update', $category) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">カテゴリ名 <span style="color:red;">*</span></label>
            <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required>
            <small style="color:#666;">スラッグは自動更新されます</small>
        </div>

        <div style="margin-top: 1.5rem;">
            <button type="submit" class="btn">更新</button>
            <a href="{{ route('admin.categories.show', $category) }}" class="btn" style="margin-left:.5rem; background:#64748b;">キャンセル</a>
        </div>
    </form>
</div>
@endsection



