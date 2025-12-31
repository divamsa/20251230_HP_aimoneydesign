<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RobotsController extends Controller
{
    /**
     * robots.txtを生成
     */
    public function index()
    {
        $sitemapUrl = url('/sitemap.xml');
        
        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        $content .= "# サイトマップの場所\n";
        $content .= "Sitemap: {$sitemapUrl}\n";
        
        // 開発環境では検索エンジンのクロールを制限（オプション）
        // 本番環境では以下の行をコメントアウトしてください
        // $content .= "\n# Disallow: /\n";

        return response($content, 200)
            ->header('Content-Type', 'text/plain; charset=utf-8');
    }
}
