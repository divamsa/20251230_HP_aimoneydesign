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

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @if(config('recaptcha.site_key'))
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('recaptcha.site_key') }}"></script>
    @endif

    @stack('styles')
</head>
<body>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h1 class="logo">
                    <a href="{{ route('top') }}">株式会社マネーデザイン</a>
                </h1>
                <nav class="nav">
                    <ul class="nav-list">
                        <li><a href="{{ route('top') }}" class="{{ request()->routeIs('top') ? 'active' : '' }}">ホーム</a></li>
                        <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">サービス</a></li>
                        <li><a href="{{ route('cases') }}" class="{{ request()->routeIs('cases') ? 'active' : '' }}">導入事例</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">会社情報</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">お問い合わせ</a></li>
                        <li><a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">ブログ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 株式会社マネーデザイン. All rights reserved.</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>




