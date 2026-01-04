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
<!-- メインビジュアルセクション -->
<section class="hero">
    <div class="hero-bg-image">
        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2000" alt="AI Collaboration Background">
    </div>
    <div class="container">
        <div class="hero-content">
            <p class="hero-label">生成AI導入支援サービス</p>
            <h1 class="hero-title">生成AIを「業務で使える仕組み」に落とし込む支援</h1>
            <p class="hero-subtitle">ツール導入ではなく、業務構造から再設計します</p>
            <p class="hero-description">生成AIを導入しても、現場で使われなければ意味がありません。<br>私たちは、生成AIを単なるツールとして扱うのではなく、<br>業務の流れそのものに組み込み、回り続ける状態を作ります。</p>
            <p class="hero-reinforcement">多くの組織で起きているのは、<br>「便利なAIを導入したが、結局使われなくなった」という問題です。<br>原因は、業務が属人化し、手順や判断基準が構造化されないまま、<br>AIだけを後付けしている点にあります。</p>
            <p class="hero-definition">私たちは、業務を分解し、再設計し、試作し、定着させるまでを<br>一貫して支援します。<br>その結果、生成AIが特別な存在ではなく、<br>業務の一部として自然に使われる状態を実現します。</p>
            <p class="hero-closing">このページでは、私たちが「どのように業務を捉え」<br>「どこまでを支援範囲とするのか」を具体的に説明します。</p>
        </div>
    </div>
</section>

<!-- ===== 提供サービス（業務構造ベース） ===== -->
<section class="lp-section lp-services-structure">
  <div class="container">

    <h2 class="lp-section-title">私たちが提供する支援</h2>
    <p class="lp-section-subtitle">
      生成AIは手段です。<br>
      業務構造を変えなければ、何も変わりません。
    </p>

    <div class="services-structure">

      <!-- Service 1 -->
      <div class="service-structure-item">
        <div class="service-step">01</div>
        <h3 class="service-title">
          業務構造再設計コンサルティング
        </h3>
        <p class="service-description">
          人が頑張る前提で積み上がった業務を分解し、<br>
          生成AIを組み込める構造へ再設計します。<br><br>
          ツール選定やAI導入の前に、<br>
          「何を仕事として残すのか」を明確にします。
        </p>
      </div>

      <!-- Service 2 -->
      <div class="service-structure-item">
        <div class="service-step">02</div>
        <h3 class="service-title">
          業務再設計のための生成AI研修・セミナー
        </h3>
        <p class="service-description">
          再設計された業務を、<br>
          現場が理解し、自ら判断できる状態を作ります。<br><br>
          操作説明ではなく、<br>
          業務を構造で捉える思考と運用を移植します。
        </p>
      </div>

      <!-- Service 3 -->
      <div class="service-structure-item">
        <div class="service-step">03</div>
        <h3 class="service-title">
          業務構造に組み込む生成AIシステム開発
        </h3>
        <p class="service-description">
          再設計された業務構造を、<br>
          人が頑張らなくても回る形に実装します。<br><br>
          システムは目的ではなく、<br>
          構造を固定するための手段です。
        </p>
      </div>

    </div>

  </div>
</section>

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
            <div class="service-content active" id="consulting" style="scroll-margin-top: 80px;">
                <div class="service-detail-card service-card-3d" data-service="consulting">
                    <div class="card-bg-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1000" alt="Consulting">
                    </div>
                    <h2 class="service-detail-title">生成AI導入コンサルティング</h2>
                    <p class="service-detail-description">
                        企業の課題に合わせた生成AI導入戦略の策定から実装まで、トータルサポートを提供します。<br>
                        <strong style="color: #374151;">FP・不動産の専門知識とAI技術を融合</strong>した、中小企業・自治体特化型の導入支援です。導入後の運用サポートまで一貫して対応いたします。
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
                        <div class="service-pricing" style="margin-top: 2rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #2563EB;">
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">価格の目安</h3>
                            <p style="color: #6B7280; margin-bottom: 0.5rem;"><strong>初回相談：</strong>無料</p>
                            <p style="color: #6B7280; margin-bottom: 1rem;"><strong>導入支援：</strong>50万円〜（規模により変動）</p>
                            <p style="font-size: 0.9rem; color: #9CA3AF; margin-top: 1rem;">※完全な見積もりは無料相談後に提示いたします</p>
                        </div>
                        <div class="service-duration" style="margin-top: 1.5rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #10B981;">
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">提供期間の目安</h3>
                            <p style="color: #6B7280;"><strong>1〜3ヶ月</strong>（導入規模により変動）</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 研修・セミナー -->
            <div class="service-content" id="training" style="scroll-margin-top: 80px;">
                <div class="service-detail-card service-card-3d" data-service="training">
                    <div class="card-bg-image">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1000" alt="Training">
                    </div>
                    <h2 class="service-detail-title">生成AI研修・セミナー</h2>
                    <p class="service-detail-description">
                        従業員向けの生成AI活用研修や、経営層向けのセミナーを実施します。<br>
                        <strong style="color: #374151;">実務に即した実践的な内容</strong>で、中小企業・自治体・文化施設の課題に特化した研修プログラムを提供します。
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
                        <div class="service-pricing" style="margin-top: 2rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #10B981;">
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">価格の目安</h3>
                            <p style="color: #6B7280; margin-bottom: 0.5rem;"><strong>初回相談：</strong>無料</p>
                            <p style="color: #6B7280; margin-bottom: 1rem;"><strong>研修・セミナー：</strong>1回5万円〜（内容により変動）</p>
                            <p style="font-size: 0.9rem; color: #9CA3AF; margin-top: 1rem;">※完全な見積もりは無料相談後に提示いたします</p>
                        </div>
                        <div class="service-duration" style="margin-top: 1.5rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #10B981;">
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">提供期間の目安</h3>
                            <p style="color: #6B7280;"><strong>1日〜1週間</strong>（研修内容により変動）</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- システム開発 -->
            <div class="service-content" id="development" style="scroll-margin-top: 80px;">
                <!-- 生成AIシステム開発（業務組込み型） -->
                <div class="service-detail-card service-card-3d" data-service="development">
                    <div class="card-bg-image">
                        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&q=80&w=1000" alt="Development">
                    </div>
                    <h2 class="service-detail-title">生成AIシステム開発（業務組込み型）</h2>
                    <p class="service-detail-description">
                        このサービスは、AIを作るための開発ではありません。<br>
                        再設計された業務構造を、システムとして固定化するための開発です。<br><br>
                        生成AI活用が定着しない最大の原因は、<br>
                        人が毎回考え、操作し、判断する前提にあります。<br>
                        私たちは、誰がやっても迷わず回り続ける状態を作るために、<br>
                        生成AIを業務フローの中に組み込みます。
                    </p>
                    <div class="service-detail-content">
                        <h3>このような課題を抱える組織に</h3>
                        <ul class="service-list">
                            <li><span class="check-icon">✓</span>PoCやデモで止まってしまっている</li>
                            <li><span class="check-icon">✓</span>人が介在しないとAIが回らない</li>
                            <li><span class="check-icon">✓</span>ツールが増えすぎて業務が複雑になっている</li>
                            <li><span class="check-icon">✓</span>属人化を仕組みとして解消したい</li>
                            <li><span class="check-icon">✓</span>内製したいが、設計の軸がない</li>
                        </ul>
                        <h3>提供内容</h3>
                        <ul class="service-list">
                            <li><span class="check-icon">✓</span>再設計済み業務フローのシステム化</li>
                            <li><span class="check-icon">✓</span>生成AIを含む処理フローの設計・実装</li>
                            <li><span class="check-icon">✓</span>プロンプト・ルール・データ構造の組込み</li>
                            <li><span class="check-icon">✓</span>運用前提の最小構成での実装</li>
                            <li><span class="check-icon">✓</span>現場が自走するための引き渡し設計</li>
                        </ul>
                        <h3>導入後の状態</h3>
                        <ul class="service-list">
                            <li><span class="check-icon">✓</span>人が判断しなくても業務が進む</li>
                            <li><span class="check-icon">✓</span>AI活用が特定の人に依存しない</li>
                            <li><span class="check-icon">✓</span>改善がシステム前提で積み上がる</li>
                            <li><span class="check-icon">✓</span>AIが「考える対象」ではなく「前提条件」になる</li>
                        </ul>
                        <div class="service-pricing" style="margin-top: 2rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #8B5CF6;">
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">価格の目安</h3>
                            <p style="color: #6B7280; margin-bottom: 1rem;"><strong>100万円〜800万円（税別）</strong></p>
                            <p style="font-size: 0.9rem; color: #9CA3AF; margin-top: 1rem;">※完全な見積もりは無料相談後に提示いたします</p>
                        </div>
                        <div class="service-duration" style="margin-top: 1.5rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #10B981;">
                            <h3 style="font-size: 1.25rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">提供期間の目安</h3>
                            <p style="color: #6B7280;"><strong>1〜4か月</strong>（最小構成〜業務組込み）</p>
                        </div>
                        <div style="margin-top: 1.5rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #8B5CF6;">
                            <p style="color: #6B7280; font-size: 0.95rem; line-height: 1.8;">※ 本サービスは、生成AI導入コンサルティングによって業務構造が整理された組織を対象としています。<br>業務設計が未整理の状態での開発は行っていません。</p>
                        </div>
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
                    </div>
                </div>
                <div class="flow-step" data-step="2">
                    <div class="flow-step-content">
                        <div class="card-bg-image">
                            <img src="{{ asset('images/flow-steps/現状分析　課題抽出　0.35 .png') }}" alt="現状分析・課題抽出" loading="eager" onerror="this.style.display='none'; console.error('画像の読み込みに失敗しました:', this.src);">
                        </div>
                        <div class="flow-step-number">2</div>
                        <div class="flow-step-progress">
                            <div class="progress-bar" data-progress="40"></div>
                        </div>
                        <h3 class="flow-step-title">現状分析・課題抽出</h3>
                        <p class="flow-step-description">
                            ヒアリングを通じて、現状の業務プロセスや課題を分析します。
                        </p>
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
                    </div>
                </div>
                <div class="flow-step" data-step="5">
                    <div class="flow-step-content">
                        <div class="card-bg-image">
                            <img src="{{ asset('images/flow-steps/運用サポート0.35.png') }}" alt="運用サポート" loading="eager" onerror="this.style.display='none'; console.error('画像の読み込みに失敗しました:', this.src);">
                        </div>
                        <div class="flow-step-number">5</div>
                        <div class="flow-step-progress">
                            <div class="progress-bar" data-progress="100"></div>
                        </div>
                        <h3 class="flow-step-title">運用サポート</h3>
                        <p class="flow-step-description">
                            導入後も、運用サポートや改善提案を継続的に提供します。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-actions">
            <div class="cta-actions">
                <a href="{{ route('contact') }}#inquiry" class="btn btn-primary">お問い合わせ</a>
                <a href="{{ route('contact') }}#download" class="btn btn-primary" style="background-color: #FF8C00; border-color: #FF8C00;">資料請求</a>
                <a href="{{ route('contact') }}#consultation" class="btn btn-primary">無料相談</a>
            </div>
        </div>
    </section>
</div>
@endsection

