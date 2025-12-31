<?php

return [
    /**
     * 管理画面にアクセスできるメールアドレス（カンマ区切り）
     *
     * 例: ADMIN_EMAILS=admin@moneydesign.co.jp,other@moneydesign.co.jp
     *
     * ⚠️ 空の場合は「制限なし」（ログインできれば管理画面に入れる）になります。
     * 本番では必ず設定することを推奨します。
     */
    'emails' => array_values(array_filter(array_map(
        static fn ($v) => trim($v),
        explode(',', (string) env('ADMIN_EMAILS', ''))
    ))),
];
