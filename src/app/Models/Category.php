<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * 一括代入可能な属性
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * このカテゴリに属する記事を取得
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
