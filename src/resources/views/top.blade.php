@extends('layouts.public')

@section('title', 'トップページ - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。中小企業、地方自治体、博物館・美術館など、様々な組織への生成AI導入支援を行っています。2025年4月から本格的に支援業務を開始いたします。')

@section('keywords', '生成AI,AI導入,AIコンサルティング,AI研修,AIシステム開発,マネーデザイン,FP,不動産,地方自治体,博物館,美術館')

@section('og_title', '株式会社マネーデザイン | 生成AI導入支援サービス')
@section('og_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。2025年4月から本格的に支援業務を開始いたします。')
@section('og_url', route('top'))
@section('og_type', 'website')

@section('twitter_title', '株式会社マネーデザイン | 生成AI導入支援サービス')
@section('twitter_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。2025年4月から本格的に支援業務を開始いたします。')

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
            <h1 class="hero-title">生成AI導入で業務効率50%向上<span class="hero-title-break">2025年4月から本格開始の導入支援</span></h1>
            <p class="hero-subtitle">中小企業・自治体・文化施設の業務改革を、<span class="hero-subtitle-break">専門チームが完全サポート。早期導入のお客様には特別なサポートプランをご用意</span></p>
            <p class="hero-description">生成AI導入により、業務時間の削減、コスト削減、顧客満足度の向上を実現。2025年4月から本格的に支援業務を開始いたします。導入から運用まで、一貫したサポートでお客様の成功を支援します。</p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">無料相談を申し込む（30秒で完了）</a>
            </div>
        </div>
    </div>
</section>

<!-- 実績数値セクション -->
<section class="stats" style="position: relative; overflow: hidden;">
    <div class="section-bg-image">
        <img src="https://images.unsplash.com/photo-1551288049-bbbda536339a?auto=format&fit=crop&q=80&w=2000" alt="Data Dashboard Background" loading="lazy" decoding="async">
    </div>
    <div class="container" style="position: relative; z-index: 1;">
        <h2 class="section-title">実績数値</h2>
        <p class="section-subtitle" style="text-align: center; margin-bottom: 1rem; color: #374151; font-size: 1.2rem; font-weight: 600;">支援業務開始：2025年4月</p>
        <p class="section-subtitle" style="text-align: center; margin-bottom: 3rem; color: #6B7280; font-size: 1.1rem;">2024年12月時点の実績（合計13社・団体）</p>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1000" alt="Corporate Office" loading="lazy" decoding="async">
                </div>
                <div class="stat-number" data-target="5">5</div>
                <div class="stat-label">導入企業数</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #6B7280; margin-top: 0.5rem;">社（中小企業）</div>
            </div>
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1575517111478-7f6afd0973db?auto=format&fit=crop&q=80&w=1000" alt="Government Building">
                </div>
                <div class="stat-number" data-target="2">2</div>
                <div class="stat-label">地方自治体</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #6B7280; margin-top: 0.5rem;">つの自治体に導入実績</div>
            </div>
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?auto=format&fit=crop&q=80&w=1000" alt="Museum Art">
                </div>
                <div class="stat-number" data-target="5">5</div>
                <div class="stat-label">博物館・美術館</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #6B7280; margin-top: 0.5rem;">つの文化施設に導入実績</div>
            </div>
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1000" alt="Satisfaction Smile">
                </div>
                <div class="stat-number" data-target="1">1</div>
                <div class="stat-label">非営利団体</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #6B7280; margin-top: 0.5rem;">つの団体に導入実績</div>
            </div>
        </div>
        <!-- 業種別内訳 -->
        <div class="stats-breakdown" style="margin-top: 4rem; padding: 2rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
            <h3 style="font-size: 1.5rem; font-weight: 700; color: #374151; margin-bottom: 1.5rem; text-align: center;">導入実績の内訳（合計13社・団体）</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: #374151; margin-bottom: 0.5rem;">中小企業</div>
                    <div style="font-size: 1.2rem; color: #6B7280;">5社</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: #374151; margin-bottom: 0.5rem;">地方自治体</div>
                    <div style="font-size: 1.2rem; color: #6B7280;">2</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: #374151; margin-bottom: 0.5rem;">博物館・美術館</div>
                    <div style="font-size: 1.2rem; color: #6B7280;">5</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: #374151; margin-bottom: 0.5rem;">非営利団体</div>
                    <div style="font-size: 1.2rem; color: #6B7280;">1</div>
                </div>
            </div>
            <div style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, #F3F4F6 0%, #E5E7EB 100%); border-radius: 12px; text-align: center;">
                <p style="font-size: 1.1rem; color: #374151; font-weight: 600; margin-bottom: 0.5rem;">✨ 支援業務開始：2025年4月 ✨</p>
                <p style="font-size: 0.95rem; color: #6B7280; line-height: 1.7;">
                    2025年4月から本格的に支援業務を開始いたします。<span class="stats-breakdown-break">早期導入のお客様には、特別なサポートプランをご用意しております。</span>
                </p>
            </div>
        </div>
        <div class="section-actions" style="margin-top: 3rem; text-align: center;">
            <a href="{{ route('contact') }}" class="btn btn-primary">無料相談を申し込む（初回60分無料）</a>
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
            <a href="{{ route('services') }}" class="btn btn-primary">サービス詳細を見る</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary" style="margin-left: 1rem;">無料相談を申し込む</a>
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
                <h3 class="case-title">人口5万人規模の市役所の業務効率化</h3>
                <p class="case-description">生成AIを活用した住民対応業務の効率化により、対応時間を50%削減。顧客満足度が60%から90%に向上しました。</p>
                <div class="case-preview-results" style="margin-top: 1rem; padding: 1rem; background: rgba(255, 255, 255, 0.9); border-radius: 8px; font-size: 0.9rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="color: #6B7280;">対応時間:</span>
                        <span style="color: #374151; font-weight: 600;">30分 → 15分</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: #6B7280;">顧客満足度:</span>
                        <span style="color: #374151; font-weight: 600;">60% → 90%</span>
                    </div>
                </div>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
            <div class="case-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?auto=format&fit=crop&q=80&w=1000" alt="Museum Gallery">
                </div>
                <div class="case-category">博物館</div>
                <h3 class="case-title">地方都市の美術館の展示解説システム</h3>
                <p class="case-description">生成AIを活用した多言語対応の展示解説システムにより、来館者満足度が75%から92%に向上。滞在時間も25%延長しました。</p>
                <div class="case-preview-results" style="margin-top: 1rem; padding: 1rem; background: rgba(255, 255, 255, 0.9); border-radius: 8px; font-size: 0.9rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="color: #6B7280;">来館者満足度:</span>
                        <span style="color: #374151; font-weight: 600;">75% → 92%</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: #6B7280;">滞在時間:</span>
                        <span style="color: #374151; font-weight: 600;">1.5時間 → 1.9時間</span>
                    </div>
                </div>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
            <div class="case-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1000" alt="Manufacturing Industry">
                </div>
                <div class="case-category">中小企業</div>
                <h3 class="case-title">従業員50名規模の製造業の顧客対応改善</h3>
                <p class="case-description">生成AIを活用した24時間365日の自動対応システムにより、対応時間を70%削減。顧客満足度が65%から98%に向上しました。</p>
                <div class="case-preview-results" style="margin-top: 1rem; padding: 1rem; background: rgba(255, 255, 255, 0.9); border-radius: 8px; font-size: 0.9rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="color: #6B7280;">対応時間:</span>
                        <span style="color: #374151; font-weight: 600;">2時間 → 36分</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: #6B7280;">顧客満足度:</span>
                        <span style="color: #374151; font-weight: 600;">65% → 98%</span>
                    </div>
                </div>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
        </div>
        <div class="section-actions">
            <a href="{{ route('cases') }}" class="btn btn-primary">導入事例をもっと見る</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary" style="margin-left: 1rem;">無料相談を申し込む</a>
        </div>
    </div>
</section>

<!-- CTAセクション -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">今すぐ無料相談を申し込む。<span class="cta-title-break">生成AI導入で業務効率を劇的に改善</span></h2>
            <p class="cta-description">初回60分無料相談で、あなたの課題に最適な生成AI導入プランをご提案します。24時間以内にご返信いたします。</p>
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">今すぐ無料相談を申し込む（30秒で完了）</a>
            </div>
        </div>
    </div>
</section>
@endsection

