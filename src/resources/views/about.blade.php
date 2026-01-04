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
<section class="company-info">
  <div class="container">

    <h1 class="page-title">会社情報</h1>
    <p class="page-subtitle">株式会社マネーデザインについて</p>

    <!-- 会社概要 -->
    <section class="company-overview">
      <h2 class="section-title">会社概要</h2>
      <dl class="company-table">
        <div>
          <dt>会社名</dt>
          <dd>株式会社マネーデザイン</dd>
        </div>
        <div>
          <dt>事業内容</dt>
          <dd>生成AI導入支援・業務構造再設計支援</dd>
        </div>
        <div>
          <dt>設立</dt>
          <dd>2014年2月6日</dd>
        </div>
        <div>
          <dt>所在地</dt>
          <dd>東京都</dd>
        </div>
        <div>
          <dt>役員</dt>
          <dd>取締役会長　中村 伸一</dd>
        </div>
      </dl>
    </section>

    <!-- 代表メッセージ -->
    <section class="company-message">
      <h2 class="section-title">代表メッセージ</h2>

      <p>
        私たち株式会社マネーデザインは、中小企業、地方自治体、博物館・美術館など、
        さまざまな組織に対して生成AI導入と業務構造の再設計を支援しています。
      </p>

      <p>
        生成AIは、単なる効率化ツールではありません。<br>
        業務の進め方、役割分担、意思決定の流れそのものを見直すことで、
        はじめて現場で機能する技術です。
      </p>

      <p>
        しかし多くの組織では、
        「何から手を付ければよいのか分からない」
        「試してみたが定着しなかった」
        といった壁に直面しています。
      </p>

      <p>
        私たちは、業務を構造的に分解し、実際に動く形で試作し、
        現場に根付くところまでを一貫して支援します。
        机上の提案ではなく、現場で回る仕組みをつくることを重視しています。
      </p>

      <p>
        生成AIを導入すること自体が目的ではありません。<br>
        組織が自ら考え、改善を続けられる状態をつくること。<br>
        それが、私たちの考える支援の本質です。
      </p>

      <p class="company-signature">
        株式会社マネーデザイン<br>
        取締役会長　中村 伸一
      </p>
    </section>

    <!-- 私たちのスタンス -->
    <section class="company-philosophy">
      <h2 class="section-title">私たちのスタンス</h2>

      <ul class="philosophy-list">
        <li>
          <strong>構造から考える</strong><br>
          ツール導入ではなく、業務構造・判断構造から見直します。
        </li>
        <li>
          <strong>実装で証明する</strong><br>
          提案で終わらせず、実際に動く形まで落とし込みます。
        </li>
        <li>
          <strong>自走できる状態をつくる</strong><br>
          外注依存ではなく、組織が自ら改善できる状態を目指します。
        </li>
      </ul>
    </section>

    <!-- CTA -->
    <section class="company-cta">
      <h2 class="section-title">生成AI導入について</h2>
      <p>まずは現状整理からでも構いません。お気軽にご相談ください。</p>
      <div class="cta-actions">
        <a href="{{ route('contact') }}#inquiry" class="btn btn-primary">お問い合わせ</a>
        <a href="{{ route('contact') }}#download" class="btn btn-primary" style="background-color: #FF8C00; border-color: #FF8C00;">資料請求</a>
        <a href="{{ route('contact') }}#consultation" class="btn btn-primary">無料相談</a>
      </div>
    </section>

  </div>
</section>
@endsection

