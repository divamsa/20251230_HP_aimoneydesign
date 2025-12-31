<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'type',
        'name',
        'company_name',
        'email',
        'phone',
        'inquiry_type',
        'message',
        'requested_materials',
        'preferred_datetime',
        'consultation_content',
        'privacy_agreed',
        'status',
    ];

    protected $casts = [
        'requested_materials' => 'array',
        'privacy_agreed' => 'boolean',
        'preferred_datetime' => 'datetime',
    ];

    // フォームタイプの定数
    const TYPE_INQUIRY = 'inquiry'; // 一般問い合わせ
    const TYPE_DOWNLOAD = 'download'; // 資料請求
    const TYPE_CONSULTATION = 'consultation'; // 無料相談

    // ステータスの定数
    const STATUS_PENDING = 'pending'; // 未対応
    const STATUS_PROCESSING = 'processing'; // 対応中
    const STATUS_COMPLETED = 'completed'; // 完了
}
