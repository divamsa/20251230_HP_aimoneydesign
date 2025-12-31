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
<!-- スティッキーサイドバーナビゲーション -->
<nav class="sticky-sidebar-nav" id="stickyNav">
    <ul class="sidebar-nav-list">
        <li><a href="#services" class="nav-link active" data-section="services">サービス</a></li>
        <li><a href="#solutions" class="nav-link" data-section="solutions">業界別</a></li>
        <li><a href="#flow" class="nav-link" data-section="flow">導入フロー</a></li>
    </ul>
</nav>

<div class="container">
    <h1 class="page-title" id="services">サービス紹介</h1>
    <p class="page-subtitle">生成AI導入支援サービスをご提供しています</p>
    
    <!-- インタラクティブなタブ切り替えシステム -->
    <section class="services-detail">
        <div class="service-tabs">
            <button class="service-tab active" data-tab="consulting" data-color="#2563EB">
                <span class="tab-text">コンサルティング</span>
            </button>
            <button class="service-tab" data-tab="training" data-color="#10B981">
                <span class="tab-text">研修・セミナー</span>
            </button>
            <button class="service-tab" data-tab="development" data-color="#8B5CF6">
                <span class="tab-text">システム開発</span>
            </button>
            <div class="tab-indicator"></div>
        </div>

        <div class="service-tab-content">
            <!-- コンサルティング -->
            <div class="service-content active" id="consulting">
                <div class="service-detail-card service-card-3d" data-service="consulting">
                    <div class="card-bg-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1000" alt="Consulting">
                    </div>
                    <h2 class="service-detail-title">生成AI導入コンサルティング</h2>
                    <p class="service-detail-description">
                        企業の課題に合わせた生成AI導入戦略の策定から実装まで、トータルサポートを提供します。
                    </p>
                    <div class="service-detail-content">
                        <h3>サービス内容</h3>
                        <ul class="service-list">
                            <li><span class="check-icon">✓</span>現状分析・課題抽出</li>
                            <li><span class="check-icon">✓</span>生成AI導入計画の策定</li>
                            <li><span class="check-icon">✓</span>導入プロセスの設計</li>
                            <li><span class="check-icon">✓</span>運用サポート・改善提案</li>
                        </ul>
                        <h3>対象企業</h3>
                        <p>中小企業、地方自治体、博物館・美術館、非営利団体など</p>
                    </div>
                </div>
            </div>

            <!-- 研修・セミナー -->
            <div class="service-content" id="training">
                <div class="service-detail-card service-card-3d" data-service="training">
                    <div class="card-bg-image">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1000" alt="Training">
                    </div>
                    <h2 class="service-detail-title">生成AI研修・セミナー</h2>
                    <p class="service-detail-description">
                        従業員向けの生成AI活用研修や、経営層向けのセミナーを実施します。
                    </p>
                    <div class="service-detail-content">
                        <h3>サービス内容</h3>
                        <ul class="service-list">
                            <li><span class="check-icon">✓</span>基礎研修（生成AIの基本知識）</li>
                            <li><span class="check-icon">✓</span>実践研修（業務への活用方法）</li>
                            <li><span class="check-icon">✓</span>経営層向けセミナー（戦略的活用）</li>
                            <li><span class="check-icon">✓</span>カスタマイズ研修（企業固有の課題に対応）</li>
                        </ul>
                        <h3>対象</h3>
                        <p>従業員、経営層、管理職など</p>
                    </div>
                </div>
            </div>

            <!-- システム開発 -->
            <div class="service-content" id="development">
                <div class="service-detail-card service-card-3d" data-service="development">
                    <div class="card-bg-image">
                        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&q=80&w=1000" alt="Development">
                    </div>
                    <h2 class="service-detail-title">生成AIシステム開発</h2>
                    <p class="service-detail-description">
                        企業固有の業務プロセスに合わせた生成AIシステムの開発をサポートします。
                    </p>
                    <div class="service-detail-content">
                        <h3>サービス内容</h3>
                        <ul class="service-list">
                            <li><span class="check-icon">✓</span>要件定義・設計</li>
                            <li><span class="check-icon">✓</span>システム開発・実装</li>
                            <li><span class="check-icon">✓</span>テスト・品質保証</li>
                            <li><span class="check-icon">✓</span>保守・運用サポート</li>
                        </ul>
                        <h3>対象業務</h3>
                        <p>顧客対応、文書作成、データ分析、コンテンツ生成など</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 業界別ソリューション -->
    <section class="industry-solutions" id="solutions">
        <h2 class="section-title">業界別ソリューション</h2>
        <p class="section-subtitle">各業界の課題に合わせた生成AI導入支援</p>
        <div class="solutions-grid">
            <div class="solution-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1575517111478-7f6afd0973db?auto=format&fit=crop&q=80&w=1000" alt="Government Building">
                </div>
                <h3 class="solution-title">地方自治体</h3>
                <p class="solution-description">
                    住民対応業務の効率化、文書作成の自動化、情報発信の強化など、自治体業務のDXをサポートします。
                </p>
            </div>
            <div class="solution-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?auto=format&fit=crop&q=80&w=1000" alt="Museum Gallery">
                </div>
                <h3 class="solution-title">博物館・美術館</h3>
                <p class="solution-description">
                    展示解説システム、来館者向けコンテンツ生成、学芸業務の効率化などをサポートします。
                </p>
            </div>
            <div class="solution-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1000" alt="Small Business Office">
                </div>
                <h3 class="solution-title">中小企業</h3>
                <p class="solution-description">
                    顧客対応の自動化、マーケティングコンテンツ生成、業務プロセスの効率化などをサポートします。
                </p>
            </div>
            <div class="solution-card">
                <div class="card-bg-image">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80&w=1000" alt="Non-profit Community">
                </div>
                <h3 class="solution-title">非営利団体</h3>
                <p class="solution-description">
                    情報発信の強化、活動報告書の作成支援、ボランティア管理の効率化などをサポートします。
                </p>
            </div>
        </div>
    </section>

    <!-- 導入フロー: インタラクティブタイムライン -->
    <section class="implementation-flow" id="flow">
        <h2 class="section-title">導入フロー</h2>
        <p class="section-subtitle">生成AI導入までの流れ</p>
        <div class="timeline-container">
            <div class="timeline-line"></div>
            <div class="flow-steps">
                <div class="flow-step" data-step="1">
                    <div class="flow-step-content">
                        <div class="card-bg-image">
                            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&q=80&w=1000" alt="Contact Consultation">
                        </div>
                        <div class="flow-step-number">1</div>
                        <div class="flow-step-progress">
                            <div class="progress-bar" data-progress="20"></div>
                        </div>
                        <h3 class="flow-step-title">お問い合わせ・無料相談</h3>
                        <p class="flow-step-description">
                            まずはお気軽にお問い合わせください。無料相談も承っております。
                        </p>
                        <button class="flow-step-detail-btn" data-modal="step1">詳細を見る</button>
                    </div>
                </div>
                <div class="flow-step" data-step="2">
                    <div class="flow-step-content">
                        <div class="card-bg-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bbbda536339a?w=1000" alt="Analysis Research">
                        </div>
                        <div class="flow-step-number">2</div>
                        <div class="flow-step-progress">
                            <div class="progress-bar" data-progress="40"></div>
                        </div>
                        <h3 class="flow-step-title">現状分析・課題抽出</h3>
                        <p class="flow-step-description">
                            ヒアリングを通じて、現状の業務プロセスや課題を分析します。
                        </p>
                        <button class="flow-step-detail-btn" data-modal="step2">詳細を見る</button>
                    </div>
                </div>
                <div class="flow-step" data-step="3">
                    <div class="flow-step-content">
                        <div class="card-bg-image">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=1000" alt="Planning Strategy">
                        </div>
                        <div class="flow-step-number">3</div>
                        <div class="flow-step-progress">
                            <div class="progress-bar" data-progress="60"></div>
                        </div>
                        <h3 class="flow-step-title">導入計画の策定</h3>
                        <p class="flow-step-description">
                            課題解決のための生成AI導入計画を策定し、ご提案します。
                        </p>
                        <button class="flow-step-detail-btn" data-modal="step3">詳細を見る</button>
                    </div>
                </div>
                <div class="flow-step" data-step="4">
                    <div class="flow-step-content">
                        <div class="card-bg-image">
                            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&q=80&w=1000" alt="Implementation Development">
                        </div>
                        <div class="flow-step-number">4</div>
                        <div class="flow-step-progress">
                            <div class="progress-bar" data-progress="80"></div>
                        </div>
                        <h3 class="flow-step-title">導入・実装</h3>
                        <p class="flow-step-description">
                            計画に基づいて、生成AIシステムの導入・実装を進めます。
                        </p>
                        <button class="flow-step-detail-btn" data-modal="step4">詳細を見る</button>
                    </div>
                </div>
                <div class="flow-step" data-step="5">
                    <div class="flow-step-content">
                        <div class="card-bg-image">
                            <img src="https://images.unsplash.com/photo-1522202176988-66270c4a4d14?w=1000" alt="Support Maintenance">
                        </div>
                        <div class="flow-step-number">5</div>
                        <div class="flow-step-progress">
                            <div class="progress-bar" data-progress="100"></div>
                        </div>
                        <h3 class="flow-step-title">運用サポート</h3>
                        <p class="flow-step-description">
                            導入後も、運用サポートや改善提案を継続的に提供します。
                        </p>
                        <button class="flow-step-detail-btn" data-modal="step5">詳細を見る</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-actions">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-ripple">お問い合わせ・無料相談</a>
        </div>
    </section>
</div>
@endsection

