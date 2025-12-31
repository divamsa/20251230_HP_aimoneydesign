<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

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

    /**
     * CSVエクスポート
     */
    public function export(Request $request)
    {
        $type = $request->query('type');
        $status = $request->query('status');

        // フィルター条件に基づいてお問い合わせを取得
        $contacts = Contact::query()
            ->when($type, fn ($q) => $q->where('type', $type))
            ->when($status, fn ($q) => $q->where('status', $status))
            ->orderByDesc('created_at')
            ->get();

        // CSVヘッダー
        $headers = [
            'ID',
            '日時',
            '種別',
            'お名前',
            '会社名',
            'メールアドレス',
            '電話番号',
            '問い合わせ種別',
            '問い合わせ内容',
            '希望資料',
            '希望日時',
            '相談内容',
            'ステータス',
            '作成日時',
            '更新日時',
        ];

        // CSVデータを生成
        $csvData = [];
        $csvData[] = $headers;

        foreach ($contacts as $contact) {
            $typeLabel = match($contact->type) {
                Contact::TYPE_INQUIRY => '一般問い合わせ',
                Contact::TYPE_DOWNLOAD => '資料請求',
                Contact::TYPE_CONSULTATION => '無料相談',
                default => $contact->type,
            };

            $statusLabel = match($contact->status) {
                Contact::STATUS_PENDING => '未対応',
                Contact::STATUS_PROCESSING => '対応中',
                Contact::STATUS_COMPLETED => '完了',
                default => $contact->status,
            };

            $row = [
                $contact->id,
                $contact->created_at?->format('Y-m-d H:i:s'),
                $typeLabel,
                $contact->name,
                $contact->company_name,
                $contact->email,
                $contact->phone,
                $contact->inquiry_type ?? '',
                $contact->message ?? '',
                is_array($contact->requested_materials) ? implode(', ', $contact->requested_materials) : ($contact->requested_materials ?? ''),
                $contact->preferred_datetime?->format('Y-m-d H:i:s') ?? '',
                $contact->consultation_content ?? '',
                $statusLabel,
                $contact->created_at?->format('Y-m-d H:i:s'),
                $contact->updated_at?->format('Y-m-d H:i:s'),
            ];

            $csvData[] = $row;
        }

        // CSVファイル名を生成
        $filename = 'contacts_' . date('Y-m-d_His') . '.csv';

        // CSVを生成してダウンロード
        $callback = function() use ($csvData) {
            $file = fopen('php://output', 'w');
            
            // BOMを追加（Excelで文字化けを防ぐ）
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
            
            foreach ($csvData as $row) {
                fputcsv($file, $row);
            }
            
            fclose($file);
        };

        return Response::stream($callback, 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
}
