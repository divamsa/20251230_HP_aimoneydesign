<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- 基本メタタグ -->
    <title>@yield('title', '株式会社マネーデザイン | 生成AI導入支援')</title>
    <meta name="description" content="@yield('description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。中小企業、地方自治体、博物館・美術館など、様々な組織への生成AI導入支援を行っています。')">
    <meta name="keywords" content="@yield('keywords', '生成AI,AI導入,AIコンサルティング,AI研修,AIシステム開発,マネーデザイン,FP,不動産')">
    <meta name="author" content="株式会社マネーデザイン">
    <meta name="robots" content="index, follow">

    <!-- OGP（Open Graph Protocol）タグ -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('og_title', '株式会社マネーデザイン | 生成AI導入支援')">
    <meta property="og:description" content="@yield('og_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。中小企業、地方自治体、博物館・美術館など、様々な組織への生成AI導入支援を行っています。')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:site_name" content="株式会社マネーデザイン">
    <meta property="og:locale" content="ja_JP">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', '株式会社マネーデザイン | 生成AI導入支援')">
    <meta name="twitter:description" content="@yield('twitter_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-image.jpg'))">

    <!-- 構造化データ（JSON-LD） -->
    @stack('structured_data')

    <!-- Google Analytics 4 (GA4) -->
    @if(config('services.google_analytics_id'))
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ config('services.google_analytics_id') }}', {
            'page_path': window.location.pathname + window.location.search
        });
    </script>
    @endif

    <!-- Google Fonts: Noto Sans JP -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @if(config('recaptcha.site_key'))
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('recaptcha.site_key') }}"></script>
    @endif

    @stack('styles')
</head>
<body>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- スキップリンク（アクセシビリティ） -->
    <a href="#main-content" class="skip-link">メインコンテンツへスキップ</a>
    <header class="header" role="banner">
        <div class="container">
            <div class="header-content">
                <h1 class="logo">
                    <a href="{{ route('top') }}" aria-label="株式会社マネーデザイン ホームページ" class="logo-link">
                        <img src="{{ asset('images/logo.png') }}" alt="マネーデザイン" class="logo-image" onerror="this.style.display='none';">
                        <span class="logo-text">株式会社マネーデザイン</span>
                    </a>
                </h1>
                <nav class="nav" role="navigation" aria-label="メインナビゲーション">
                    <ul class="nav-list">
                        <li><a href="{{ route('top') }}" class="{{ request()->routeIs('top') ? 'active' : '' }}" aria-current="{{ request()->routeIs('top') ? 'page' : 'false' }}">ホーム</a></li>
                        <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}" aria-current="{{ request()->routeIs('services') ? 'page' : 'false' }}">サービス</a></li>
                        <li><a href="{{ route('cases') }}" class="{{ request()->routeIs('cases') ? 'active' : '' }}" aria-current="{{ request()->routeIs('cases') ? 'page' : 'false' }}">導入事例</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}" aria-current="{{ request()->routeIs('about') ? 'page' : 'false' }}">会社情報</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}" aria-current="{{ request()->routeIs('contact') ? 'page' : 'false' }}">お問い合わせ</a></li>
                        <li><a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'active' : '' }}" aria-current="{{ request()->routeIs('blog.*') ? 'page' : 'false' }}">ブログ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="main" id="main-content" tabindex="-1">
        @yield('content')
    </main>

    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 class="footer-title">株式会社マネーデザイン</h3>
                    <p class="footer-description">生成AI導入支援サービス</p>
                    <p class="footer-description">FP✖️不動産✖️生成AIを謳う専門チーム</p>
                </div>
                <div class="footer-section">
                    <h4 class="footer-heading">サービス</h4>
                    <nav aria-label="フッターナビゲーション: サービス">
                        <ul class="footer-links">
                            <li><a href="{{ route('services') }}">サービス一覧</a></li>
                            <li><a href="{{ route('cases') }}">導入事例</a></li>
                            <li><a href="{{ route('blog.index') }}">ブログ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer-section">
                    <h4 class="footer-heading">会社情報</h4>
                    <nav aria-label="フッターナビゲーション: 会社情報">
                        <ul class="footer-links">
                            <li><a href="{{ route('about') }}">会社概要</a></li>
                            <li><a href="{{ route('contact') }}">お問い合わせ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer-section">
                    <h4 class="footer-heading">お問い合わせ</h4>
                    <address class="footer-contact">
                        <p><strong>電話:</strong> <a href="tel:03-XXXX-XXXX" aria-label="電話番号: 03-XXXX-XXXX">03-XXXX-XXXX</a></p>
                        <p><strong>メール:</strong> <a href="mailto:info@moneydesign.co.jp" aria-label="メールアドレス: info@moneydesign.co.jp">info@moneydesign.co.jp</a></p>
                        <p><strong>営業時間:</strong> 平日 9:00〜18:00</p>
                    </address>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 株式会社マネーデザイン. All rights reserved.</p>
                <nav aria-label="フッターナビゲーション: 法的情報">
                    <div class="footer-legal">
                        <a href="/privacy">プライバシーポリシー</a>
                        <span class="footer-separator" aria-hidden="true">|</span>
                        <a href="/terms">利用規約</a>
                    </div>
                </nav>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>




