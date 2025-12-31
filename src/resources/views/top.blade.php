@extends('layouts.public')

@section('title', 'トップページ - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。中小企業、地方自治体、博物館・美術館など、様々な組織への生成AI導入支援を行っています。100社以上の導入実績があります。')

@section('keywords', '生成AI,AI導入,AIコンサルティング,AI研修,AIシステム開発,マネーデザイン,FP,不動産,地方自治体,博物館,美術館')

@section('og_title', '株式会社マネーデザイン | 生成AI導入支援サービス')
@section('og_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。100社以上の導入実績があります。')
@section('og_url', route('top'))
@section('og_type', 'website')

@section('twitter_title', '株式会社マネーデザイン | 生成AI導入支援サービス')
@section('twitter_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。100社以上の導入実績があります。')

@push('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Organization",
  "name": "株式会社マネーデザイン",
  "url": "{{ route('top') }}",
  "logo": "{{ asset('images/logo.png') }}",
  "description": "FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス",
  "address": {
    "@@type": "PostalAddress",
    "addressLocality": "東京都",
    "addressCountry": "JP"
  },
  "contactPoint": {
    "@@type": "ContactPoint",
    "contactType": "お問い合わせ",
    "url": "{{ route('contact') }}"
  },
  "sameAs": []
}
</script>
@endpush

@section('content')
<!-- メインビジュアルセクション -->
<section class="hero">
    <div class="hero-bg-pattern">
        <svg viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg">
            <circle cx="400" cy="400" r="300" fill="none" stroke="white" stroke-width="0.5" opacity="0.2"/>
            <circle cx="400" cy="400" r="200" fill="none" stroke="white" stroke-width="0.5" opacity="0.2"/>
            <path d="M400 100 L400 700 M100 400 L700 400" stroke="white" stroke-width="0.5" opacity="0.2"/>
            <g fill="white" opacity="0.3">
                <circle cx="400" cy="100" r="5"/><circle cx="400" cy="700" r="5"/>
                <circle cx="100" cy="400" r="5"/><circle cx="700" cy="400" r="5"/>
                <circle cx="400" cy="400" r="8"/>
            </g>
        </svg>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">生成AI導入支援サービス</h1>
            <p class="hero-subtitle">FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービスです</p>
            <p class="hero-description">中小企業、地方自治体、博物館・美術館など、様々な組織への生成AI導入支援を行っています。</p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">お問い合わせ</a>
                <a href="{{ route('services') }}" class="btn btn-secondary">サービス詳細を見る</a>
            </div>
        </div>
    </div>
</section>

<!-- 実績数値セクション -->
<section class="stats">
    <div class="container">
        <h2 class="section-title">実績数値</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/>
                    </svg>
                </div>
                <div class="stat-icon">🏢</div>
                <div class="stat-number" data-target="100">0+</div>
                <div class="stat-label">導入企業数</div>
            </div>
            <div class="stat-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7v2h20V7L12 2zm0 18c4.42 0 8-3.58 8-8h-2c0 3.31-2.69 6-6 6s-6-2.69-6-6H4c0 4.42 3.58 8 8 8z"/>
                    </svg>
                </div>
                <div class="stat-icon">🏛️</div>
                <div class="stat-number" data-target="50">0+</div>
                <div class="stat-label">地方自治体</div>
            </div>
            <div class="stat-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                    </svg>
                </div>
                <div class="stat-icon">🎨</div>
                <div class="stat-number" data-target="30">0+</div>
                <div class="stat-label">博物館・美術館</div>
            </div>
            <div class="stat-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                </div>
                <div class="stat-icon">⭐</div>
                <div class="stat-number" data-target="95">0%</div>
                <div class="stat-label">顧客満足度</div>
            </div>
        </div>
    </div>
</section>

<!-- サービス紹介セクション -->
<section class="services-preview">
    <div class="container">
        <h2 class="section-title">サービス紹介</h2>
        <p class="section-subtitle">生成AI導入支援の3つのサービス</p>
        <div class="services-grid">
            <div class="service-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14h-2V9h2v8zm-4 0H8v-4h2v4zm8 0h-2v-6h2v6z"/>
                    </svg>
                </div>
                <div class="service-icon">🤖</div>
                <h3 class="service-title">生成AI導入コンサルティング</h3>
                <p class="service-description">企業の課題に合わせた生成AI導入戦略の策定から実装まで、トータルサポートを提供します。</p>
                <a href="{{ route('services') }}" class="service-link">詳細を見る →</a>
            </div>
            <div class="service-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>
                <div class="service-icon">📚</div>
                <h3 class="service-title">生成AI研修・セミナー</h3>
                <p class="service-description">従業員向けの生成AI活用研修や、経営層向けのセミナーを実施します。</p>
                <a href="{{ route('services') }}" class="service-link">詳細を見る →</a>
            </div>
            <div class="service-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"/>
                    </svg>
                </div>
                <div class="service-icon">🛠️</div>
                <h3 class="service-title">生成AIシステム開発</h3>
                <p class="service-description">企業固有の業務プロセスに合わせた生成AIシステムの開発をサポートします。</p>
                <a href="{{ route('services') }}" class="service-link">詳細を見る →</a>
            </div>
        </div>
        <div class="section-actions">
            <a href="{{ route('services') }}" class="btn">すべてのサービスを見る</a>
        </div>
    </div>
</section>

<!-- 導入事例サマリーセクション -->
<section class="cases-preview">
    <div class="container">
        <h2 class="section-title">導入事例</h2>
        <p class="section-subtitle">実際の導入事例をご紹介します</p>
        <div class="cases-grid">
            <div class="case-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71z"/>
                    </svg>
                </div>
                <div class="case-category">地方自治体</div>
                <h3 class="case-title">A市役所の業務効率化</h3>
                <p class="case-description">生成AIを活用した住民対応業務の効率化により、対応時間を50%削減しました。</p>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
            <div class="case-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/>
                    </svg>
                </div>
                <div class="case-category">博物館</div>
                <h3 class="case-title">B美術館の展示解説システム</h3>
                <p class="case-description">生成AIを活用した展示解説システムにより、来館者の満足度が向上しました。</p>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
            <div class="case-card">
                <div class="bg-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z"/>
                    </svg>
                </div>
                <div class="case-category">中小企業</div>
                <h3 class="case-title">C製造業の顧客対応改善</h3>
                <p class="case-description">生成AIを活用した顧客対応システムにより、問い合わせ対応の品質が向上しました。</p>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
        </div>
        <div class="section-actions">
            <a href="{{ route('cases') }}" class="btn">すべての導入事例を見る</a>
        </div>
    </div>
</section>

<!-- CTAセクション -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">生成AI導入についてお気軽にご相談ください</h2>
            <p class="cta-description">無料相談も承っております。まずはお問い合わせください。</p>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">お問い合わせ</a>
                <a href="{{ route('contact') }}" class="btn btn-secondary">資料請求</a>
            </div>
        </div>
    </div>
</section>
@endsection

