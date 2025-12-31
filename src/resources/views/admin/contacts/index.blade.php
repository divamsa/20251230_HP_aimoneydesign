@extends('layouts.public')

@section('title', 'お問い合わせ管理（一覧） - 管理画面')

@section('content')
<div class="container">
    <h1 class="page-title">お問い合わせ管理（一覧）</h1>
    <p class="page-subtitle">contactsテーブルの内容を一覧表示します</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card" style="margin-bottom: 1.5rem;">
        <h2 class="section-title">絞り込み</h2>
        <form method="GET" action="{{ route('admin.contacts.index') }}">
            <div class="form-group">
                <label for="filter_type">種別</label>
                <select id="filter_type" name="type">
                    <option value="">すべて</option>
                    @foreach($types as $key => $label)
                        <option value="{{ $key }}" @selected($type === $key)>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="filter_status">ステータス</label>
                <select id="filter_status" name="status">
                    <option value="">すべて</option>
                    @foreach($statuses as $key => $label)
                        <option value="{{ $key }}" @selected($status === $key)>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn">適用</button>
            <a href="{{ route('admin.contacts.index') }}" class="btn" style="margin-left: .5rem; background:#64748b;">リセット</a>
        </form>
    </div>

    <div style="margin-bottom: 1.5rem;">
        <a href="{{ route('admin.contacts.export', ['type' => $type, 'status' => $status]) }}" class="btn" style="background:#10b981;">
            CSVエクスポート（{{ $contacts->total() }}件）
        </a>
    </div>

    <div class="card">
        <h2 class="section-title">一覧</h2>
        <div style="overflow:auto;">
            <table style="width:100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">ID</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">日時</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">種別</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">お名前</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">会社名</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">メール</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">ステータス</th>
                        <th style="text-align:left; padding:.75rem; border-bottom:1px solid #e0e0e0;">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                        <tr>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $contact->id }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $contact->created_at?->format('Y-m-d H:i') }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $types[$contact->type] ?? $contact->type }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $contact->name }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $contact->company_name }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $contact->email }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">{{ $statuses[$contact->status] ?? $contact->status }}</td>
                            <td style="padding:.75rem; border-bottom:1px solid #f1f5f9;">
                                <a class="btn" href="{{ route('admin.contacts.show', $contact) }}">詳細</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" style="padding:1rem;">データがありません</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div style="margin-top: 1rem;">
            {{ $contacts->links() }}
        </div>
    </div>
</div>
@endsection




