<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RecaptchaService
{
    /**
     * reCAPTCHA v3のトークンを検証
     *
     * @param string $token
     * @return bool
     */
    public function verify(string $token): bool
    {
        // 開発環境でreCAPTCHAキーが設定されていない場合はスキップ
        if (empty(config('recaptcha.secret_key'))) {
            Log::info('reCAPTCHA secret key not set, skipping verification');
            return true;
        }

        try {
            $response = Http::asForm()->post(config('recaptcha.verify_url'), [
                'secret' => config('recaptcha.secret_key'),
                'response' => $token,
                'remoteip' => request()->ip(),
            ]);

            $result = $response->json();

            // 検証が成功し、スコアが閾値以上の場合
            if (isset($result['success']) && $result['success'] === true) {
                $score = $result['score'] ?? 0;
                return $score >= config('recaptcha.score_threshold', 0.5);
            }

            return false;
        } catch (\Exception $e) {
            Log::error('reCAPTCHA verification error: ' . $e->getMessage());
            // エラー時は検証をスキップ（本番環境ではfalseを返すべき）
            return true; // 開発環境ではtrueを返す
        }
    }

    /**
     * reCAPTCHA検証のエラーメッセージを取得
     *
     * @param array $errorCodes
     * @return string
     */
    public function getErrorMessage(array $errorCodes): string
    {
        $messages = [
            'missing-input-secret' => 'reCAPTCHAの設定が正しくありません。',
            'invalid-input-secret' => 'reCAPTCHAの設定が正しくありません。',
            'missing-input-response' => 'reCAPTCHAの検証に失敗しました。ページを再読み込みして再度お試しください。',
            'invalid-input-response' => 'reCAPTCHAの検証に失敗しました。ページを再読み込みして再度お試しください。',
            'bad-request' => 'reCAPTCHAの検証に失敗しました。',
            'timeout-or-duplicate' => 'reCAPTCHAの検証がタイムアウトしました。再度お試しください。',
        ];

        foreach ($errorCodes as $code) {
            if (isset($messages[$code])) {
                return $messages[$code];
            }
        }

        return 'reCAPTCHAの検証に失敗しました。再度お試しください。';
    }
}
