<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactAdminController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->query('type');
        $status = $request->query('status');

        $contacts = Contact::query()
            ->when($type, fn ($q) => $q->where('type', $type))
            ->when($status, fn ($q) => $q->where('status', $status))
            ->orderByDesc('created_at')
            ->paginate(20)
            ->withQueryString();

        return view('admin.contacts.index', [
            'contacts' => $contacts,
            'type' => $type,
            'status' => $status,
            'types' => [
                Contact::TYPE_INQUIRY => '一般問い合わせ',
                Contact::TYPE_DOWNLOAD => '資料請求',
                Contact::TYPE_CONSULTATION => '無料相談',
            ],
            'statuses' => [
                Contact::STATUS_PENDING => '未対応',
                Contact::STATUS_PROCESSING => '対応中',
                Contact::STATUS_COMPLETED => '完了',
            ],
        ]);
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', [
            'contact' => $contact,
            'types' => [
                Contact::TYPE_INQUIRY => '一般問い合わせ',
                Contact::TYPE_DOWNLOAD => '資料請求',
                Contact::TYPE_CONSULTATION => '無料相談',
            ],
            'statuses' => [
                Contact::STATUS_PENDING => '未対応',
                Contact::STATUS_PROCESSING => '対応中',
                Contact::STATUS_COMPLETED => '完了',
            ],
        ]);
    }

    public function updateStatus(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'status' => ['required', 'string', 'in:pending,processing,completed'],
        ], [
            'status.required' => 'ステータスを選択してください。',
            'status.in' => '不正なステータスです。',
        ]);

        $contact->update([
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.contacts.show', $contact)
            ->with('success', 'ステータスを更新しました。');
    }
}
