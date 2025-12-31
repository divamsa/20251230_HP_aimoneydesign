<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * 一括代入可能な属性
     */
    protected $fillable = [
        'title',
        'content',
        'published_at',
    ];

    /**
     * 型キャスト
     */
    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * 公開済みの記事のみを取得するスコープ
     */
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }
}
