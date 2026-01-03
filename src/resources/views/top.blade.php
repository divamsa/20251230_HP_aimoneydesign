@extends('layouts.public')

@section('title', 'トップページ - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。中小企業、地方自治体、博物館・美術館など、様々な組織への生成AI導入支援を行っています。2025年4月から本格的に支援業務を開始いたしました。')

@section('keywords', '生成AI,AI導入,AIコンサルティング,AI研修,AIシステム開発,マネーデザイン,FP,不動産,地方自治体,博物館,美術館')

@section('og_title', '株式会社マネーデザイン | 生成AI導入支援サービス')
@section('og_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。2025年4月から本格的に支援業務を開始いたしました。')
@section('og_url', route('top'))
@section('og_type', 'website')

@section('twitter_title', '株式会社マネーデザイン | 生成AI導入支援サービス')
@section('twitter_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス。2025年4月から本格的に支援業務を開始いたしました。')

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
            <p class="hero-label">AI Collaboration Background</p>
            <h1 class="hero-title">2026年、組織は「努力」では立ち行かなくなります</h1>
            <p class="hero-subtitle">人材不足、業務過多、DX疲れ。<span class="hero-subtitle-break">多くの組織が同じ壁にぶつかっています。</span></p>
            <p class="hero-description">問題は現場の能力ではありません。<br>人が頑張ることを前提に積み上がった<strong>業務の構造と設計</strong>にあります。</p>
            <p class="hero-reinforcement">これは生成AIの話ではありません。<br>人が頑張る前提で積み上がった「業務構造」の話です。</p>
            <p class="hero-definition">私たちは、この「業務構造」を現場で組み替えるための<br>生成AI導入・業務再設計を支援しています</p>
        </div>
    </div>
</section>

<!-- 提供価値セクション -->
<section class="lp-section lp-value-proposition">
    <div class="container">
        <h2 class="lp-section-title">何を設計するのか</h2>
        <p class="lp-section-subtitle">生成AI導入を「現場で回る仕組み」にする</p>
        <div class="lp-cards-grid">
            <div class="lp-card">
                <h3 class="lp-card-title">業務分解</h3>
                <p class="lp-card-description">業務を構造化できる粒度まで分解した結果、<br>再設計可能な状態を作ります</p>
            </div>
            <div class="lp-card">
                <h3 class="lp-card-title">プロトタイプ</h3>
                <p class="lp-card-description">最速で動くものを作った結果、<br>現場で検証しながら改善できる状態を作ります</p>
            </div>
            <div class="lp-card">
                <h3 class="lp-card-title">定着</h3>
                <p class="lp-card-description">運用フローと教育を整えた結果、<br>組織が自走できる状態を作ります</p>
            </div>
        </div>
    </div>
</section>

<!-- 根拠/信頼セクション -->
<section class="lp-section lp-proof">
  <div class="container">
    <h2 class="lp-section-title">なぜ、多くの改善は続かないのか</h2>
    <p class="lp-section-subtitle">努力や意欲の問題ではありません</p>

    <p style="text-align: center; margin-bottom: var(--spacing-6); color: var(--color-neutral-300); font-size: var(--font-size-base); line-height: var(--line-height-relaxed);">
      この構造に心当たりがない組織は、ほぼ存在しません。
    </p>

    <ul class="lp-self-identification-list" style="list-style: none; padding: 0; max-width: 600px; margin: 0 auto var(--spacing-8); text-align: left;">
      <li style="padding: var(--spacing-3) 0; font-size: var(--font-size-base); color: var(--color-neutral-300); border-bottom: 1px solid var(--color-neutral-700);">
        ・業務が特定の人に依存している（属人化）
      </li>
      <li style="padding: var(--spacing-3) 0; font-size: var(--font-size-base); color: var(--color-neutral-300); border-bottom: 1px solid var(--color-neutral-700);">
        ・常に忙しく、改善の時間が取れない
      </li>
      <li style="padding: var(--spacing-3) 0; font-size: var(--font-size-base); color: var(--color-neutral-300);">
        ・改善を試みても、すぐ元に戻ってしまう
      </li>
    </ul>

    <p style="text-align: center; margin-bottom: var(--spacing-6); color: var(--color-neutral-200); font-size: var(--font-size-base); line-height: var(--line-height-relaxed);">
      これらは個別の問題ではありません。<br>
      人が頑張ることを前提に積み上がった<strong>業務の構造そのもの</strong>が原因です。
    </p>

    <p style="text-align: center; margin-bottom: var(--spacing-8); color: var(--color-neutral-200); font-size: var(--font-size-base); line-height: var(--line-height-relaxed);">
      私たちは、机上の設計ではなく、<br>
      <strong>実際に動かしながら業務構造を組み替える進め方</strong>を取ります。
    </p>

    <div class="lp-badges-grid">
      <div class="lp-badge">
        <div class="lp-badge-content">非エンジニアでも扱える形に再設計</div>
      </div>
      <div class="lp-badge">
        <div class="lp-badge-content">既存業務を壊さず構造から整理</div>
      </div>
      <div class="lp-badge">
        <div class="lp-badge-content">プロンプトを一過性で終わらせない運用設計</div>
      </div>
      <div class="lp-badge">
        <div class="lp-badge-content">目的と現場に合ったツールだけを選定</div>
      </div>
    </div>
  </div>
</section>

<!-- 自分ごと化セクション -->
<section class="lp-section lp-self-identification">
    <div class="container">
        <p class="lp-self-identification-text" style="font-size: var(--font-size-lg); color: var(--color-neutral-200); text-align: center; line-height: var(--line-height-relaxed); margin-bottom: var(--spacing-6);">
            もし、あなたの組織で次のどれかに心当たりがあれば、<br>この話は無関係ではありません。
        </p>
        <ul class="lp-self-identification-list" style="list-style: none; padding: 0; max-width: 600px; margin: 0 auto; text-align: left;">
            <li style="padding: var(--spacing-3) 0; font-size: var(--font-size-base); color: var(--color-neutral-300); border-bottom: 1px solid var(--color-neutral-700);">・業務が特定の人に依存している（属人化）</li>
            <li style="padding: var(--spacing-3) 0; font-size: var(--font-size-base); color: var(--color-neutral-300); border-bottom: 1px solid var(--color-neutral-700);">・常に忙しく、改善の時間が取れない</li>
            <li style="padding: var(--spacing-3) 0; font-size: var(--font-size-base); color: var(--color-neutral-300);">・改善を試みても、すぐ元に戻ってしまう</li>
        </ul>
    </div>
</section>

<!-- サービスセクション -->
<section class="lp-section lp-services">
    <div class="container">
        <h2 class="lp-section-title">何を提供するのか</h2>
        <div class="lp-cards-grid lp-services-grid">
            <div class="lp-card">
                <h3 class="lp-card-title">生成AI導入コンサル</h3>
                <p class="lp-card-description">業務棚卸→設計→試作→定着を進めた結果、<br>構造改善が実現した状態を作ります</p>
            </div>
            <div class="lp-card">
                <h3 class="lp-card-title">社内研修/講師</h3>
                <p class="lp-card-description">段階的な研修を実施した結果、<br>組織全体で活用できる状態を作ります</p>
            </div>
            <div class="lp-card">
                <h3 class="lp-card-title">コンテンツ制作の構造改善</h3>
                <p class="lp-card-description">制作フローを再設計した結果、<br>持続可能な体制が整った状態を作ります</p>
            </div>
        </div>
    </div>
</section>

<!-- 進め方セクション -->
<section class="lp-section lp-process">
    <div class="container">
        <h2 class="lp-section-title">どう進めるのか</h2>
        <div class="lp-steps-grid">
            <div class="lp-step">
                <div class="lp-step-number">1</div>
                <h3 class="lp-step-title">ヒアリング</h3>
                <p class="lp-step-description">現状の課題と目標を<br>切り分けます</p>
            </div>
            <div class="lp-step">
                <div class="lp-step-number">2</div>
                <h3 class="lp-step-title">業務分解</h3>
                <p class="lp-step-description">業務を構造化できる粒度まで<br>分解・整理します</p>
            </div>
            <div class="lp-step">
                <div class="lp-step-number">3</div>
                <h3 class="lp-step-title">試作・検証</h3>
                <p class="lp-step-description">最速で動くプロトタイプを<br>現場で検証します</p>
            </div>
            <div class="lp-step">
                <div class="lp-step-number">4</div>
                <h3 class="lp-step-title">運用・定着</h3>
                <p class="lp-step-description">運用フローと教育で<br>自走できる状態を作ります</p>
            </div>
        </div>
    </div>
</section>

<!-- CTAセクション（問い合わせ誘導） -->
<section class="lp-section lp-cta">
    <div class="container">
        <div class="lp-cta-content">
            <h2 class="lp-section-title">まずは現状を整理します</h2>
            <p class="lp-cta-subtitle">課題の切り分けと、最初の一手を一緒に決めます</p>
            <div class="lp-cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">構造を一緒に見直す（10分）</a>
            </div>
            <p class="lp-cta-note">まずは状況の整理から行います</p>
        </div>
    </div>
</section>

<!-- 実績数値セクション -->
<section class="stats" style="position: relative; overflow: hidden;">
    <div class="section-bg-image">
        <img src="https://images.unsplash.com/photo-1551288049-bbbda536339a?auto=format&fit=crop&q=80&w=2000" alt="Data Dashboard Background" loading="lazy" decoding="async">
    </div>
    <div class="container" style="position: relative; z-index: 1;">
        <h2 class="section-title">対象領域</h2>
        <p class="section-subtitle" style="text-align: center; margin-bottom: var(--spacing-6); color: var(--color-neutral-400); font-size: var(--font-size-lg); line-height: var(--line-height-relaxed); max-width: 800px; margin-left: auto; margin-right: auto;">この支援は、次のような組織を想定しています。<br>共通するのは、業務の構造が重く、改善が滞りがちな組織です。</p>
        <p class="section-subtitle" style="text-align: center; margin-bottom: 1rem; color: var(--color-neutral-300); font-size: 1.2rem; font-weight: 600;">支援業務開始：2025年4月</p>
        <p class="section-subtitle" style="text-align: center; margin-bottom: 3rem; color: var(--color-neutral-400); font-size: 1.1rem;">2024年12月時点の実績（合計13社・団体）</p>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1000" alt="Corporate Office" loading="lazy" decoding="async">
                </div>
                <div class="stat-number" data-target="5">5</div>
                <div class="stat-label">導入企業数</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #000000; margin-top: 0.5rem;">社（中小企業）</div>
            </div>
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1575517111478-7f6afd0973db?auto=format&fit=crop&q=80&w=1000" alt="Government Building">
                </div>
                <div class="stat-number" data-target="2">2</div>
                <div class="stat-label">地方自治体</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #000000; margin-top: 0.5rem;">つの自治体に導入実績</div>
            </div>
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?auto=format&fit=crop&q=80&w=1000" alt="Museum Art">
                </div>
                <div class="stat-number" data-target="5">5</div>
                <div class="stat-label">博物館・美術館</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #000000; margin-top: 0.5rem;">つの文化施設に導入実績</div>
            </div>
            <div class="stat-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1000" alt="Satisfaction Smile">
                </div>
                <div class="stat-number" data-target="1">1</div>
                <div class="stat-label">非営利団体</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #000000; margin-top: 0.5rem;">つの団体に導入実績</div>
            </div>
        </div>
        <!-- 業種別内訳 -->
        <div class="stats-breakdown" style="margin-top: 4rem; padding: 2rem; background: var(--color-neutral-800); border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); border: 1px solid var(--color-neutral-700);">
            <h3 style="font-size: 1.5rem; font-weight: 700; color: var(--color-neutral-100); margin-bottom: 1.5rem; text-align: center;">導入実績の内訳（合計13社・団体）</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--color-neutral-100); margin-bottom: 0.5rem;">中小企業</div>
                    <div style="font-size: 1.2rem; color: var(--color-neutral-300);">5社</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--color-neutral-100); margin-bottom: 0.5rem;">地方自治体</div>
                    <div style="font-size: 1.2rem; color: var(--color-neutral-300);">2</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--color-neutral-100); margin-bottom: 0.5rem;">博物館・美術館</div>
                    <div style="font-size: 1.2rem; color: var(--color-neutral-300);">5</div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2rem; font-weight: 700; color: var(--color-neutral-100); margin-bottom: 0.5rem;">非営利団体</div>
                    <div style="font-size: 1.2rem; color: var(--color-neutral-300);">1</div>
                </div>
            </div>
            <div style="margin-top: 2rem; padding: 1.5rem; background: var(--color-neutral-700); border-radius: 12px; text-align: center; border: 1px solid var(--color-neutral-600);">
                <p style="font-size: 1.1rem; color: var(--color-neutral-100); font-weight: 600; margin-bottom: 0.5rem;">✨ 支援業務開始：2025年4月 ✨</p>
                <p style="font-size: 0.95rem; color: var(--color-neutral-300); line-height: 1.7;">
                    2025年4月から本格的に支援業務を開始いたしました。<span class="stats-breakdown-break">早期導入のお客様には、特別なサポートプランをご用意しております。</span>
                </p>
            </div>
        </div>
        <div class="section-actions" style="margin-top: 3rem; text-align: center;">
            <a href="{{ route('cases') }}" style="color: var(--color-neutral-200); text-decoration: underline; text-underline-offset: 4px;">導入事例をもっと見る</a>
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
                <p class="service-description" style="color: #000000 !important;">業務を構造化できる粒度まで分解し、再設計可能な状態を作ります。</p>
                <a href="{{ route('services') }}" class="service-link">詳細を見る →</a>
            </div>
            <div class="service-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1000" alt="Training Seminar with Instructor and Students">
                </div>
                <h3 class="service-title">生成AI研修・セミナー</h3>
                <p class="service-description" style="color: #000000 !important;">業務構造の再設計に必要な思考と手法を伝えます。</p>
                <a href="{{ route('services') }}" class="service-link">詳細を見る →</a>
            </div>
            <div class="service-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&q=80&w=1000" alt="Development Coding">
                </div>
                <h3 class="service-title">生成AIシステム開発</h3>
                <p class="service-description" style="color: #000000 !important;">業務構造に組み込まれるシステムを構築します。</p>
                <a href="{{ route('services') }}" class="service-link">詳細を見る →</a>
            </div>
        </div>
        <div class="section-actions">
            <a href="{{ route('services') }}" style="color: var(--color-neutral-300); text-decoration: underline; text-underline-offset: 4px;">サービス詳細を見る</a>
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
                <h3 class="case-title" style="color: #000000 !important;">人口5万人規模の市役所の<br>業務構造改善</h3>
                <p class="case-description" style="text-align: center; color: #000000 !important;">住民対応業務の構造を再設計し、<br>対応時間を50%削減。<br>顧客満足度が60%から90%に向上しました。</p>
                <div class="case-preview-results" style="margin-top: 1rem; padding: 1rem; background: rgba(255, 255, 255, 0.9); border-radius: 8px; font-size: 0.9rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="color: #000000 !important;">対応時間:</span>
                        <span style="color: #000000 !important; font-weight: 600;">30分 → 15分</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: #000000 !important;">顧客満足度:</span>
                        <span style="color: #000000 !important; font-weight: 600;">60% → 90%</span>
                    </div>
                </div>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
            <div class="case-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?auto=format&fit=crop&q=80&w=1000" alt="Museum Gallery">
                </div>
                <div class="case-category">博物館</div>
                <h3 class="case-title" style="color: #000000 !important;">地方都市の美術館の<br>展示解説システム</h3>
                <p class="case-description" style="text-align: center; color: #000000 !important;">多言語対応の展示解説システムにより、<br>来館者満足度が75%から92%に向上。<br>滞在時間も25%延長。</p>
                <div class="case-preview-results" style="margin-top: 1rem; padding: 1rem; background: rgba(255, 255, 255, 0.9); border-radius: 8px; font-size: 0.9rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="color: #000000 !important;">来館者満足度:</span>
                        <span style="color: #000000 !important; font-weight: 600;">75% → 92%</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: #000000 !important;">滞在時間:</span>
                        <span style="color: #000000 !important; font-weight: 600;">1.5時間 → 1.9時間</span>
                    </div>
                </div>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
            <div class="case-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=1000" alt="Manufacturing Industry">
                </div>
                <div class="case-category">中小企業</div>
                <h3 class="case-title" style="color: #000000 !important;">従業員50名規模の製造業の<br>顧客対応改善</h3>
                <p class="case-description" style="text-align: center; color: #000000 !important;">顧客対応の構造を再設計し、<br>対応時間を70%削減。<br>顧客満足度が65%から98%に向上しました。</p>
                <div class="case-preview-results" style="margin-top: 1rem; padding: 1rem; background: rgba(255, 255, 255, 0.9); border-radius: 8px; font-size: 0.9rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="color: #000000 !important;">対応時間:</span>
                        <span style="color: #000000 !important; font-weight: 600;">2時間 → 36分</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span style="color: #000000 !important;">顧客満足度:</span>
                        <span style="color: #000000 !important; font-weight: 600;">65% → 98%</span>
                    </div>
                </div>
                <a href="{{ route('cases') }}" class="case-link">詳細を見る →</a>
            </div>
        </div>
        <div class="section-actions">
            <a href="{{ route('cases') }}" style="color: var(--color-neutral-300); text-decoration: underline; text-underline-offset: 4px;">導入事例をもっと見る</a>
        </div>
    </div>
</section>

<!-- CTAセクション -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">最初の一手を決めます</h2>
            <p class="cta-description">現状を整理し、課題の切り分けと最初の一手を一緒に決めます。</p>
            
            <!-- 選別文 -->
            <div style="margin: 2rem 0; padding: 1.5rem 0; text-align: center;">
                <p style="font-size: var(--font-size-base); color: var(--color-neutral-300); line-height: var(--line-height-relaxed); margin-bottom: 0.75rem;">
                    便利な生成AI活用を探している方には向いていません。
                </p>
                <p style="font-size: var(--font-size-base); color: var(--color-neutral-300); line-height: var(--line-height-relaxed); margin-bottom: 0.75rem;">
                    業務の根本に手を入れる覚悟がない場合、お勧めしません。
                </p>
                <p style="font-size: var(--font-size-base); color: var(--color-neutral-300); line-height: var(--line-height-relaxed);">
                    部分的な効率化が目的の場合、この支援は適しません。
                </p>
            </div>
            
            <div class="cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">構造を一緒に見直す（10分）</a>
            </div>
            <p class="lp-cta-note" style="text-align: center;">一緒に最初の一歩を踏み出しましょう</p>
        </div>
    </div>
</section>
@endsection

