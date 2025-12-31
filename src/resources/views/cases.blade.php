@extends('layouts.public')

@section('title', '導入事例・実績 - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', '100社以上の導入実績があります。地方自治体、博物館・美術館、中小企業など、様々な組織への生成AI導入事例をご紹介します。業務効率化、顧客対応改善、文書作成支援などの実績があります。')

@section('keywords', '生成AI導入事例,AI導入実績,地方自治体AI導入,博物館AI導入,美術館AI導入,中小企業AI導入,マネーデザイン')

@section('og_title', '導入事例・実績 - 株式会社マネーデザイン | 生成AI導入支援')
@section('og_description', '100社以上の導入実績があります。地方自治体、博物館・美術館、中小企業など、様々な組織への生成AI導入事例をご紹介します。')
@section('og_url', route('cases'))
@section('og_type', 'website')

@section('twitter_title', '導入事例・実績 - 株式会社マネーデザイン')
@section('twitter_description', '100社以上の導入実績があります。地方自治体、博物館・美術館、中小企業など、様々な組織への生成AI導入事例をご紹介します。')

@push('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "ItemList",
  "name": "生成AI導入事例",
  "description": "地方自治体、博物館・美術館、中小企業など、様々な組織への生成AI導入事例",
  "itemListElement": [
    {
      "@@type": "ListItem",
      "position": 1,
      "name": "A市役所の業務効率化"
    },
    {
      "@@type": "ListItem",
      "position": 2,
      "name": "B美術館の展示解説システム"
    },
    {
      "@@type": "ListItem",
      "position": 3,
      "name": "C製造業の顧客対応改善"
    }
  ]
}
</script>
@endpush

@section('content')
<div class="container">
    <h1 class="page-title">導入事例・実績</h1>
    <p class="page-subtitle">これまでの導入事例をご紹介します</p>
    
    <!-- 実績数値 -->
    <section class="cases-stats">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">100+</div>
                <div class="stat-label">導入企業数</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">50+</div>
                <div class="stat-label">地方自治体</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">30+</div>
                <div class="stat-label">博物館・美術館</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">95%</div>
                <div class="stat-label">顧客満足度</div>
            </div>
        </div>
    </section>

    <!-- 導入事例一覧 -->
    <section class="cases-list">
        <h2 class="section-title">導入事例一覧</h2>
        <p class="section-subtitle">実際の導入事例をご紹介します</p>
        
        <div class="cases-grid">
            <div class="case-card">
                <div class="case-category">地方自治体</div>
                <h3 class="case-title">A市役所の業務効率化</h3>
                <p class="case-description">
                    生成AIを活用した住民対応業務の効率化により、対応時間を50%削減しました。
                    問い合わせ対応の自動化により、職員の負担を軽減し、より質の高いサービス提供が可能になりました。
                </p>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">対応時間削減</span>
                        <span class="case-result-value">50%</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">顧客満足度向上</span>
                        <span class="case-result-value">30%</span>
                    </div>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">博物館</div>
                <h3 class="case-title">B美術館の展示解説システム</h3>
                <p class="case-description">
                    生成AIを活用した展示解説システムにより、来館者の満足度が向上しました。
                    多言語対応により、外国人観光客へのサービスも充実しました。
                </p>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">来館者満足度</span>
                        <span class="case-result-value">92%</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">滞在時間延長</span>
                        <span class="case-result-value">25%</span>
                    </div>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">中小企業</div>
                <h3 class="case-title">C製造業の顧客対応改善</h3>
                <p class="case-description">
                    生成AIを活用した顧客対応システムにより、問い合わせ対応の品質が向上しました。
                    24時間365日の自動対応により、顧客満足度が大幅に向上しました。
                </p>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">対応時間短縮</span>
                        <span class="case-result-value">70%</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">顧客満足度</span>
                        <span class="case-result-value">98%</span>
                    </div>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">地方自治体</div>
                <h3 class="case-title">D町役場の文書作成支援</h3>
                <p class="case-description">
                    生成AIを活用した文書作成支援システムにより、議事録や報告書の作成時間を大幅に短縮しました。
                    職員の業務負担を軽減し、より重要な業務に集中できるようになりました。
                </p>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">文書作成時間短縮</span>
                        <span class="case-result-value">60%</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">業務効率向上</span>
                        <span class="case-result-value">40%</span>
                    </div>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">博物館</div>
                <h3 class="case-title">E歴史博物館のデジタルアーカイブ</h3>
                <p class="case-description">
                    生成AIを活用したデジタルアーカイブシステムにより、資料の検索・閲覧が容易になりました。
                    学芸員の業務効率が向上し、より多くの来館者に情報を提供できるようになりました。
                </p>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">検索時間短縮</span>
                        <span class="case-result-value">80%</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">資料アクセス数</span>
                        <span class="case-result-value">3倍</span>
                    </div>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">中小企業</div>
                <h3 class="case-title">F小売業のマーケティング支援</h3>
                <p class="case-description">
                    生成AIを活用したマーケティングコンテンツ生成により、SNS投稿やメールマガジンの作成時間を大幅に短縮しました。
                    コンテンツの質も向上し、顧客エンゲージメントが向上しました。
                </p>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">コンテンツ作成時間短縮</span>
                        <span class="case-result-value">75%</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">エンゲージメント向上</span>
                        <span class="case-result-value">50%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTAセクション -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">あなたの組織でも生成AI導入を始めませんか？</h2>
                <p class="cta-description">無料相談も承っております。まずはお問い合わせください。</p>
                <div class="cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">お問い合わせ</a>
                    <a href="{{ route('contact') }}" class="btn btn-secondary">無料相談</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

