@extends('layouts.public')

@section('title', '会社情報 - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの会社情報。会社概要、代表メッセージ、経営理念、専門性・強みをご紹介します。100社以上の導入実績があります。')

@section('keywords', '株式会社マネーデザイン,会社情報,会社概要,代表メッセージ,経営理念,FP,不動産,生成AI')

@section('og_title', '会社情報 - 株式会社マネーデザイン | 生成AI導入支援')
@section('og_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの会社情報。会社概要、代表メッセージ、経営理念、専門性・強みをご紹介します。')
@section('og_url', route('about'))
@section('og_type', 'website')

@section('twitter_title', '会社情報 - 株式会社マネーデザイン')
@section('twitter_description', 'FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの会社情報。会社概要、代表メッセージ、経営理念、専門性・強みをご紹介します。')

@push('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Organization",
  "name": "株式会社マネーデザイン",
  "url": "{{ route('top') }}",
  "logo": "{{ asset('images/logo.png') }}",
  "description": "FP✖️不動産✖️生成AIを謳う株式会社マネーデザインの生成AI導入支援サービス",
  "foundingDate": "2020",
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
<div class="container">
    <h1 class="page-title">会社情報</h1>
    <p class="page-subtitle">株式会社マネーデザインについて</p>
    
    <!-- 会社概要 -->
    <section class="company-overview">
        <div class="company-overview-card">
            <h2 class="section-title">会社概要</h2>
            <div class="company-info-grid">
                <div class="company-info-item">
                    <span class="company-info-label">会社名</span>
                    <span class="company-info-value">株式会社マネーデザイン</span>
                </div>
                <div class="company-info-item">
                    <span class="company-info-label">事業内容</span>
                    <span class="company-info-value">生成AI導入支援、FP✖️不動産✖️生成AIコンサルティング</span>
                </div>
                <div class="company-info-item">
                    <span class="company-info-label">設立</span>
                    <span class="company-info-value">2020年</span>
                </div>
                <div class="company-info-item">
                    <span class="company-info-label">所在地</span>
                    <span class="company-info-value">東京都</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 代表メッセージ -->
    <section class="message">
        <h2 class="section-title">代表メッセージ</h2>
        <div class="message-content">
            <p>
                私たち株式会社マネーデザインは、中小企業、地方自治体、博物館・美術館など、さまざまな組織に対して生成AI導入と業務構造の再設計を支援しています。
            </p>
            <p>
                生成AIは、単なる効率化ツールではありません。<br>
                業務の進め方、役割分担、意思決定の流れそのものを見直すことで、はじめて現場で機能する技術です。
            </p>
            <p>
                しかし多くの組織では、<br>
                「何から手を付ければよいのか分からない」<br>
                「試してみたが定着しなかった」<br>
                といった壁に直面しています。
            </p>
            <p>
                私たちは、業務を構造的に分解し、実際に動く形で試作し、現場に根付くところまでを一貫して支援します。<br>
                机上の提案ではなく、現場で回る仕組みをつくることを重視しています。
            </p>
            <p>
                生成AIを導入すること自体が目的ではありません。<br>
                組織が自ら考え、改善を続けられる状態をつくること。<br>
                それが、私たちの考える支援の本質です。
            </p>
            <p class="message-signature">
                株式会社マネーデザイン<br>
                代表取締役
            </p>
        </div>
    </section>

    <!-- 経営理念 -->
    <section class="philosophy">
        <h2 class="section-title">経営理念</h2>
        <div class="philosophy-grid">
            <div class="philosophy-card">
                <h3 class="philosophy-title">お客様第一</h3>
                <p class="philosophy-description">
                    お客様の課題に真摯に向き合い、最適なソリューションを提供します。
                </p>
            </div>
            <div class="philosophy-card">
                <h3 class="philosophy-title">専門性の追求</h3>
                <p class="philosophy-description">
                    FP、不動産、生成AIの専門知識を活かし、質の高いサービスを提供します。
                </p>
            </div>
            <div class="philosophy-card">
                <h3 class="philosophy-title">継続的な改善</h3>
                <p class="philosophy-description">
                    常に最新の技術と知識を学び、サービスを改善し続けます。
                </p>
            </div>
        </div>
    </section>

    <!-- 専門性・強み -->
    <section class="strengths">
        <h2 class="section-title">専門性・強み</h2>
        <div class="strengths-grid">
            <div class="strength-card">
                <div class="strength-icon">💼</div>
                <h3 class="strength-title">FPの専門知識</h3>
                <p class="strength-description">
                    ファイナンシャルプランナーの専門知識を活かし、財務・経営の視点から生成AI導入をサポートします。
                </p>
            </div>
            <div class="strength-card">
                <div class="strength-icon">🏢</div>
                <h3 class="strength-title">不動産の専門知識</h3>
                <p class="strength-description">
                    不動産の専門知識を活かし、不動産業界への生成AI導入をサポートします。
                </p>
            </div>
            <div class="strength-card">
                <div class="strength-icon">🤖</div>
                <h3 class="strength-title">生成AIの専門知識</h3>
                <p class="strength-description">
                    生成AIの最新技術と知識を活かし、効果的な導入をサポートします。
                </p>
            </div>
            <div class="strength-card">
                <div class="strength-icon">🎯</div>
                <h3 class="strength-title">実績と経験</h3>
                <p class="strength-description">
                    100社以上の導入実績と豊富な経験を活かし、確実な導入をサポートします。
                </p>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">生成AI導入についてお気軽に<br>ご相談ください</h2>
                <p class="cta-description">無料相談も承っております。まずはお問い合わせください。</p>
                <div class="cta-actions">
                    <a href="{{ route('contact') }}#inquiry" class="btn btn-primary">お問い合わせ</a>
                    <a href="{{ route('contact') }}#download" class="btn btn-primary" style="background-color: #FF8C00; border-color: #FF8C00;">資料請求</a>
                    <a href="{{ route('contact') }}#consultation" class="btn btn-primary">無料相談</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

