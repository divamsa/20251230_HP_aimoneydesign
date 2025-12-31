<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ImageGenerationService
{
    /**
     * タイトルからサムネイル画像を生成
     *
     * @param string $title ブログ記事のタイトル
     * @return string|null 生成された画像のパス（失敗時はnull）
     */
    public function generateThumbnail(string $title): ?string
    {
        // 開発環境でAPIキーが設定されていない場合はスキップ
        if (empty(config('services.google_api_key'))) {
            Log::info('Google API key not set, skipping image generation');
            return null;
        }

        try {
            // Gemini Imagen APIを使用して画像を生成
            // プロンプトを構築
            $prompt = "Create a professional blog thumbnail image for: {$title}. The image should be visually appealing, modern, and relevant to the topic.";

            // Gemini Imagen APIを呼び出し
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://generativelanguage.googleapis.com/v1beta/models/imagen-3.0-generate-001:generateImages', [
                'prompt' => $prompt,
                'number_of_images' => 1,
                'aspect_ratio' => '16:9',
            ], [
                'key' => config('services.google_api_key'),
            ]);

            if (!$response->successful()) {
                Log::error('Image generation API error: ' . $response->body());
                return null;
            }

            $result = $response->json();

            // 画像データを取得
            if (!isset($result['generatedImages'][0]['imageBytes'])) {
                Log::error('Image generation response format error');
                return null;
            }

            $imageData = base64_decode($result['generatedImages'][0]['imageBytes']);

            // 画像を保存
            $filename = 'thumbnails/' . uniqid() . '.jpg';
            Storage::disk('public')->put($filename, $imageData);

            return $filename;
        } catch (\Exception $e) {
            Log::error('Image generation error: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * 既存のサムネイル画像を削除
     *
     * @param string|null $thumbnailPath
     * @return void
     */
    public function deleteThumbnail(?string $thumbnailPath): void
    {
        if ($thumbnailPath && Storage::disk('public')->exists($thumbnailPath)) {
            Storage::disk('public')->delete($thumbnailPath);
        }
    }
}
