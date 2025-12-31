<?php

return [
    'site_key' => env('RECAPTCHA_SITE_KEY', ''),
    'secret_key' => env('RECAPTCHA_SECRET_KEY', ''),
    'verify_url' => 'https://www.google.com/recaptcha/api/siteverify',
    'score_threshold' => 0.5, // reCAPTCHA v3のスコア閾値（0.0-1.0）
];
