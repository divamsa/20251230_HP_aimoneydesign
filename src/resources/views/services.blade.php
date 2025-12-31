@extends('layouts.public')

@section('title', 'サービス紹介 - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', '生成AI導入コンサルティング、生成AI研修・セミナー、生成AIシステム開発の3つのサービスをご提供しています。中小企業、地方自治体、博物館・美術館など、様々な組織への生成AI導入支援を行っています。')

@section('keywords', '生成AI導入,AIコンサルティング,AI研修,AIセミナー,AIシステム開発,マネーデザイン,地方自治体,博物館,美術館')

@section('og_title', 'サービス紹介 - 株式会社マネーデザイン | 生成AI導入支援')
@section('og_description', '生成AI導入コンサルティング、生成AI研修・セミナー、生成AIシステム開発の3つのサービスをご提供しています。')
@section('og_url', route('services'))
@section('og_type', 'website')

@section('twitter_title', 'サービス紹介 - 株式会社マネーデザイン')
@section('twitter_description', '生成AI導入コンサルティング、生成AI研修・セミナー、生成AIシステム開発の3つのサービスをご提供しています。')

@push('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Service",
  "serviceType": "生成AI導入支援サービス",
  "provider": {
    "@@type": "Organization",
    "name": "株式会社マネーデザイン",
    "url": "{{ route('top') }}"
  },
  "areaServed": {
    "@@type": "Country",
    "name": "日本"
  },
  "hasOfferCatalog": {
    "@@type": "OfferCatalog",
    "name": "生成AI導入支援サービス",
    "itemListElement": [
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "生成AI導入コンサルティング"
        }
      },
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "生成AI研修・セミナー"
        }
      },
      {
        "@@type": "Offer",
        "itemOffered": {
          "@@type": "Service",
          "name": "生成AIシステム開発"
        }
      }
    ]
  }
}
</script>
@endpush

@section('content')
<div class="container">
    <h1 class="page-title">サービス紹介</h1>
    <p class="page-subtitle">生成AI導入支援サービスをご提供しています</p>
    
    <!-- 3つのサービス詳細 -->
    <section class="services-detail">
        <div class="service-detail-card">
            <div class="service-detail-icon">🤖</div>
            <h2 class="service-detail-title">生成AI導入コンサルティング</h2>
            <p class="service-detail-description">
                企業の課題に合わせた生成AI導入戦略の策定から実装まで、トータルサポートを提供します。
            </p>
            <div class="service-detail-content">
                <h3>サービス内容</h3>
                <ul>
                    <li>現状分析・課題抽出</li>
                    <li>生成AI導入計画の策定</li>
                    <li>導入プロセスの設計</li>
                    <li>運用サポート・改善提案</li>
                </ul>
                <h3>対象企業</h3>
                <p>中小企業、地方自治体、博物館・美術館、非営利団体など</p>
            </div>
        </div>

        <div class="service-detail-card">
            <div class="service-detail-icon">📚</div>
            <h2 class="service-detail-title">生成AI研修・セミナー</h2>
            <p class="service-detail-description">
                従業員向けの生成AI活用研修や、経営層向けのセミナーを実施します。
            </p>
            <div class="service-detail-content">
                <h3>サービス内容</h3>
                <ul>
                    <li>基礎研修（生成AIの基本知識）</li>
                    <li>実践研修（業務への活用方法）</li>
                    <li>経営層向けセミナー（戦略的活用）</li>
                    <li>カスタマイズ研修（企業固有の課題に対応）</li>
                </ul>
                <h3>対象</h3>
                <p>従業員、経営層、管理職など</p>
            </div>
        </div>

        <div class="service-detail-card">
            <div class="service-detail-icon">🛠️</div>
            <h2 class="service-detail-title">生成AIシステム開発</h2>
            <p class="service-detail-description">
                企業固有の業務プロセスに合わせた生成AIシステムの開発をサポートします。
            </p>
            <div class="service-detail-content">
                <h3>サービス内容</h3>
                <ul>
                    <li>要件定義・設計</li>
                    <li>システム開発・実装</li>
                    <li>テスト・品質保証</li>
                    <li>保守・運用サポート</li>
                </ul>
                <h3>対象業務</h3>
                <p>顧客対応、文書作成、データ分析、コンテンツ生成など</p>
            </div>
        </div>
    </section>

    <!-- 業界別ソリューション -->
    <section class="industry-solutions">
        <h2 class="section-title">業界別ソリューション</h2>
        <p class="section-subtitle">各業界の課題に合わせた生成AI導入支援</p>
        <div class="solutions-grid">
            <div class="solution-card">
                <h3 class="solution-title">地方自治体</h3>
                <p class="solution-description">
                    住民対応業務の効率化、文書作成の自動化、情報発信の強化など、自治体業務のDXをサポートします。
                </p>
            </div>
            <div class="solution-card">
                <h3 class="solution-title">博物館・美術館</h3>
                <p class="solution-description">
                    展示解説システム、来館者向けコンテンツ生成、学芸業務の効率化などをサポートします。
                </p>
            </div>
            <div class="solution-card">
                <h3 class="solution-title">中小企業</h3>
                <p class="solution-description">
                    顧客対応の自動化、マーケティングコンテンツ生成、業務プロセスの効率化などをサポートします。
                </p>
            </div>
            <div class="solution-card">
                <h3 class="solution-title">非営利団体</h3>
                <p class="solution-description">
                    情報発信の強化、活動報告書の作成支援、ボランティア管理の効率化などをサポートします。
                </p>
            </div>
        </div>
    </section>

    <!-- 導入フロー -->
    <section class="implementation-flow">
        <h2 class="section-title">導入フロー</h2>
        <p class="section-subtitle">生成AI導入までの流れ</p>
        <div class="flow-steps">
            <div class="flow-step">
                <div class="flow-step-number">1</div>
                <h3 class="flow-step-title">お問い合わせ・無料相談</h3>
                <p class="flow-step-description">
                    まずはお気軽にお問い合わせください。無料相談も承っております。
                </p>
            </div>
            <div class="flow-step">
                <div class="flow-step-number">2</div>
                <h3 class="flow-step-title">現状分析・課題抽出</h3>
                <p class="flow-step-description">
                    ヒアリングを通じて、現状の業務プロセスや課題を分析します。
                </p>
            </div>
            <div class="flow-step">
                <div class="flow-step-number">3</div>
                <h3 class="flow-step-title">導入計画の策定</h3>
                <p class="flow-step-description">
                    課題解決のための生成AI導入計画を策定し、ご提案します。
                </p>
            </div>
            <div class="flow-step">
                <div class="flow-step-number">4</div>
                <h3 class="flow-step-title">導入・実装</h3>
                <p class="flow-step-description">
                    計画に基づいて、生成AIシステムの導入・実装を進めます。
                </p>
            </div>
            <div class="flow-step">
                <div class="flow-step-number">5</div>
                <h3 class="flow-step-title">運用サポート</h3>
                <p class="flow-step-description">
                    導入後も、運用サポートや改善提案を継続的に提供します。
                </p>
            </div>
        </div>
        <div class="section-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary">お問い合わせ・無料相談</a>
        </div>
    </section>
</div>
@endsection

