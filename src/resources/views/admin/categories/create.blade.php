@extends('layouts.public')

@section('title', 'カテゴリ作成 - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">カテゴリ作成</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.categories.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">カテゴリ名 <span style="color:red;">*</span></label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            <small style="color:#666;">スラッグは自動生成されます</small>
        </div>

        <div style="margin-top: 1.5rem;">
            <button type="submit" class="btn">作成</button>
            <a href="{{ route('admin.categories.index') }}" class="btn" style="margin-left:.5rem; background:#64748b;">キャンセル</a>
        </div>
    </form>
</div>
@endsection



