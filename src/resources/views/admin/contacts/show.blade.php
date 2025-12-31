@extends('layouts.public')

@section('title', 'お問い合わせ管理（詳細） - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">お問い合わせ管理（詳細）</h1>
    <p class="page-subtitle">ID: {{ $contact->id }}</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div style="margin-bottom: 1rem;">
        <a href="{{ route('admin.contacts.index') }}" class="btn" style="background:#64748b;">一覧に戻る</a>
    </div>

    <div class="card" style="margin-bottom: 1.5rem;">
        <h2 class="section-title">ステータス更新</h2>
        <form method="POST" action="{{ route('admin.contacts.updateStatus', $contact) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="status">ステータス</label>
                <select id="status" name="status" required>
                    @foreach($statuses as $key => $label)
                        <option value="{{ $key }}" @selected(old('status', $contact->status) === $key)>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn">更新</button>
        </form>
    </div>

    <div class="card">
        <h2 class="section-title">基本情報</h2>
        <p><strong>作成日時:</strong> {{ $contact->created_at?->format('Y-m-d H:i:s') }}</p>
        <p><strong>種別:</strong> {{ $types[$contact->type] ?? $contact->type }}</p>
        <p><strong>お名前:</strong> {{ $contact->name }}</p>
        <p><strong>会社名・組織名:</strong> {{ $contact->company_name }}</p>
        <p><strong>メール:</strong> {{ $contact->email }}</p>
        <p><strong>電話:</strong> {{ $contact->phone }}</p>
        <p><strong>個人情報同意:</strong> {{ $contact->privacy_agreed ? '同意' : '未同意' }}</p>
        <p><strong>ステータス:</strong> {{ $statuses[$contact->status] ?? $contact->status }}</p>
    </div>

    <div class="card" style="margin-top: 1.5rem;">
        <h2 class="section-title">内容（Contact/内容）</h2>

        @if($contact->type === 'inquiry')
            <p><strong>問い合わせ種別:</strong> {{ $contact->inquiry_type }}</p>
            <p><strong>問い合わせ内容:</strong></p>
            <div style="white-space: pre-wrap; background:#f8f9fa; padding:1rem; border-radius:.5rem;">{{ $contact->message }}</div>
        @elseif($contact->type === 'download')
            <p><strong>希望資料:</strong></p>
            <div style="background:#f8f9fa; padding:1rem; border-radius:.5rem;">
                @if(is_array($contact->requested_materials) && count($contact->requested_materials) > 0)
                    <ul style="margin-left:1.25rem;">
                        @foreach($contact->requested_materials as $m)
                            <li>{{ $m }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>（なし）</p>
                @endif
            </div>
        @elseif($contact->type === 'consultation')
            <p><strong>希望日時:</strong> {{ optional($contact->preferred_datetime)?->format('Y-m-d H:i') }}</p>
            <p><strong>相談内容:</strong></p>
            <div style="white-space: pre-wrap; background:#f8f9fa; padding:1rem; border-radius:.5rem;">{{ $contact->consultation_content }}</div>
        @else
            <p>不明な種別です（{{ $contact->type }}）</p>
        @endif
    </div>
</div>
@endsection


