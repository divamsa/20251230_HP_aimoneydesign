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
    <div class="hero-bg-image">
        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000" alt="AI Collaboration Background">
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
<section class="stats" style="position: relative; overflow: hidden;">
    <div class="section-bg-image">
        <img src="https://images.unsplash.com/photo-1551288049-bbbda536339a?auto=format&fit=crop&q=80&w=2000" alt="Data Dashboard Background">
    </div>
    <div class="container" style="position: relative; z-index: 1;">
        <h2 class="section-title">実績数値</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1000" alt="Corporate Office">
                </div>
                <div class="stat-number" data-target="100">0+</div>
                <div class="stat-label">導入企業数</div>
            </div>
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1575517111478-7f6afd0973db?auto=format&fit=crop&q=80&w=1000" alt="Government Building">
                </div>
                <div class="stat-number" data-target="50">0+</div>
                <div class="stat-label">地方自治体</div>
            </div>
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?auto=format&fit=crop&q=80&w=1000" alt="Museum Art">
                </div>
                <div class="stat-number" data-target="30">0+</div>
                <div class="stat-label">博物館・美術館</div>
            </div>
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1000" alt="Satisfaction Smile">
                </div>
                <div class="stat-number" data-target="95">0%</div>
                <div class="stat-label">顧客満足度</div>
            </div>
        </div>
    </div>
</section>

<!-- サービス紹介セクション -->
<section class="services-preview" style="position: relative; overflow: hidden;">
    <div class="section-bg-image">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=2000" alt="Technology CPU Background">
    </div>
    <div class="container" style="position: relative; z-index: 1;">
        <h2 class="section-title">サービス紹介</h2>
        <p class="section-subtitle">生成AI導入支援の3つのサービス</p>
        <div class="services-grid">
            <div class="service-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1000" alt="Consulting Business">
                </div>
                <h3 class="service-title">生成AI導入コンサルティング</h3>
                <p class="service-description">企業の課題に合わせた生成AI導入戦略の策定から実装まで、トータルサポートを提供します。</p>
                <a href="{{ route('services') }}" class="service-link">詳細を見る →</a>
            </div>
            <div class="service-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1000" alt="Training Seminar with Instructor and Students">
                </div>
                <h3 class="service-title">生成AI研修・セミナー</h3>
                <p class="service-description">従業員向けの生成AI活用研修や、経営層向けのセミナーを実施します。</p>
                <a href="{{ route('services') }}" class="service-link">詳細を見る →</a>
            </div>
            <div class="service-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&q=80&w=1000" alt="Development Coding">
                </div>
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
<section class="cases-preview" style="position: relative; overflow: hidden;">
    <div class="section-bg-image">
        <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?auto=format&fit=crop&q=80&w=2000" alt="City Future Background">
    </div>
    <div class="container" style="position: relative; z-index: 1;">
        <h2 class="section-title">導入事例</h2>
        <p class="section-subtitle">実際の導入事例をご紹介します</p>
        <div class="cases-grid">
            <div class="case-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1575517111478-7f6afd0973db?auto=format&fit=crop&q=80&w=1000" alt="Government Office">
                </div>
                <div class="case-category">地方自治体</div>
                <h3 class="case-title">A市役所の業務効率化</h3>
                <p class="case-description">生成AIを活用した住民対応業務の効率化により、対応時間を50%削減しました。</p>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
            <div class="case-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?auto=format&fit=crop&q=80&w=1000" alt="Museum Gallery">
                </div>
                <div class="case-category">博物館</div>
                <h3 class="case-title">B美術館の展示解説システム</h3>
                <p class="case-description">生成AIを活用した展示解説システムにより、来館者の満足度が向上しました。</p>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
            <div class="case-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1000" alt="Manufacturing Industry">
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

