@extends('layouts.public')

@section('title', '導入事例・実績 - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', '2025年4月から本格的に支援業務を開始。地方自治体、博物館・美術館、中小企業など、様々な組織への生成AI導入事例をご紹介します。業務効率化、顧客対応改善、文書作成支援などの実績があります。')

@section('keywords', '生成AI導入事例,AI導入実績,地方自治体AI導入,博物館AI導入,美術館AI導入,中小企業AI導入,マネーデザイン')

@section('og_title', '導入事例・実績 - 株式会社マネーデザイン | 生成AI導入支援')
@section('og_description', '2025年4月から本格的に支援業務を開始。地方自治体、博物館・美術館、中小企業など、様々な組織への生成AI導入事例をご紹介します。')
@section('og_url', route('cases'))
@section('og_type', 'website')

@section('twitter_title', '導入事例・実績 - 株式会社マネーデザイン')
@section('twitter_description', '2025年4月から本格的に支援業務を開始。地方自治体、博物館・美術館、中小企業など、様々な組織への生成AI導入事例をご紹介します。')

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
        <div style="text-align: center; margin-bottom: 2rem;">
            <p style="font-size: 1.2rem; color: #374151; font-weight: 600; margin-bottom: 0.5rem;">✨ 支援業務開始：2025年4月 ✨</p>
            <p style="font-size: 1rem; color: #6B7280;">2024年12月時点の実績（合計13社・団体）</p>
        </div>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number" data-target="5">0</div>
                <div class="stat-label">導入企業数</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #6B7280; margin-top: 0.5rem;">社（中小企業）</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="2">0</div>
                <div class="stat-label">地方自治体</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #6B7280; margin-top: 0.5rem;">つの自治体に導入実績</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="5">0</div>
                <div class="stat-label">博物館・美術館</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #6B7280; margin-top: 0.5rem;">つの文化施設に導入実績</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="1">0</div>
                <div class="stat-label">非営利団体</div>
                <div class="stat-detail" style="font-size: 0.9rem; color: #6B7280; margin-top: 0.5rem;">つの団体に導入実績</div>
            </div>
        </div>
        <div style="margin-top: 3rem; padding: 2rem; background: linear-gradient(135deg, #F3F4F6 0%, #E5E7EB 100%); border-radius: 12px; text-align: center;">
            <p style="font-size: 1.1rem; color: #374151; font-weight: 600; margin-bottom: 1rem;">2025年4月から本格的に支援業務を開始</p>
            <p style="font-size: 0.95rem; color: #6B7280; line-height: 1.7; margin-bottom: 1.5rem;">
                2025年4月から本格的に生成AI導入支援業務を開始いたします。<br>
                早期導入のお客様には、特別なサポートプランをご用意しております。<br>
                まずは無料相談で、お気軽にご相談ください。
            </p>
            <a href="{{ route('contact') }}" class="btn btn-primary">無料相談を申し込む（30秒で完了）</a>
        </div>
    </section>

    <!-- 導入事例一覧 -->
    <section class="cases-list">
        <h2 class="section-title">導入事例一覧</h2>
        <p class="section-subtitle">実際の導入事例をご紹介します</p>
        
        <div class="cases-grid">
            <div class="case-card">
                <div class="case-category">地方自治体</div>
                <h3 class="case-title">人口5万人規模の市役所の業務効率化</h3>
                <div class="case-before-after" style="margin: 1.5rem 0; padding: 1.5rem; background: rgba(243, 244, 246, 0.8); border-radius: 12px;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入前の課題</h4>
                    <ul style="color: #6B7280; line-height: 1.8; margin-bottom: 1.5rem; padding-left: 1.5rem;">
                        <li>住民からの問い合わせ対応に1件あたり平均30分かかっていた</li>
                        <li>職員の業務負担が大きく、他の業務に集中できない</li>
                        <li>対応時間が長く、住民の満足度が低い（満足度60%）</li>
                    </ul>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入後の成果</h4>
                    <ul style="color: #6B7280; line-height: 1.8; padding-left: 1.5rem;">
                        <li>問い合わせ対応時間が平均15分に短縮（50%削減）</li>
                        <li>職員の業務負担が軽減し、他の業務に集中できるようになった</li>
                        <li>住民の満足度が90%に向上（30ポイント向上）</li>
                    </ul>
                </div>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">対応時間</span>
                        <span class="case-result-value">30分 → 15分</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">顧客満足度</span>
                        <span class="case-result-value">60% → 90%</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">導入期間</span>
                        <span class="case-result-value">2ヶ月</span>
                    </div>
                </div>
                <div class="case-testimonial" style="margin-top: 1.5rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #2563EB;">
                    <p style="color: #374151; font-style: italic; line-height: 1.8; margin-bottom: 1rem;">
                        「生成AI導入により、職員の業務負担が大幅に軽減され、より質の高い住民サービスを提供できるようになりました。導入から運用まで、マネーデザインさんのサポートが非常に心強かったです。」
                    </p>
                    <p style="font-size: 0.9rem; color: #6B7280;">
                        <strong>市役所 総務課長</strong>（匿名希望）
                    </p>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">博物館</div>
                <h3 class="case-title">地方都市の美術館の展示解説システム</h3>
                <div class="case-before-after" style="margin: 1.5rem 0; padding: 1.5rem; background: rgba(243, 244, 246, 0.8); border-radius: 12px;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入前の課題</h4>
                    <ul style="color: #6B7280; line-height: 1.8; margin-bottom: 1.5rem; padding-left: 1.5rem;">
                        <li>展示解説が日本語のみで、外国人観光客への対応が不十分</li>
                        <li>来館者の滞在時間が短く、展示への理解が深まらない</li>
                        <li>学芸員の解説業務が多く、他の業務に集中できない</li>
                    </ul>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入後の成果</h4>
                    <ul style="color: #6B7280; line-height: 1.8; padding-left: 1.5rem;">
                        <li>多言語対応（英語、中国語、韓国語）により、外国人観光客へのサービスが充実</li>
                        <li>来館者の滞在時間が平均1.5時間から1.9時間に延長（25%延長）</li>
                        <li>来館者満足度が92%に向上（導入前75%から17ポイント向上）</li>
                    </ul>
                </div>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">来館者満足度</span>
                        <span class="case-result-value">75% → 92%</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">滞在時間</span>
                        <span class="case-result-value">1.5時間 → 1.9時間</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">導入期間</span>
                        <span class="case-result-value">3ヶ月</span>
                    </div>
                </div>
                <div class="case-testimonial" style="margin-top: 1.5rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #10B981;">
                    <p style="color: #374151; font-style: italic; line-height: 1.8; margin-bottom: 1rem;">
                        「多言語対応の展示解説システムにより、外国人観光客からの評価が大幅に向上しました。来館者の滞在時間も延長し、展示への理解が深まったと好評です。」
                    </p>
                    <p style="font-size: 0.9rem; color: #6B7280;">
                        <strong>美術館 学芸員</strong>（匿名希望）
                    </p>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">中小企業</div>
                <h3 class="case-title">従業員50名規模の製造業の顧客対応改善</h3>
                <div class="case-before-after" style="margin: 1.5rem 0; padding: 1.5rem; background: rgba(243, 244, 246, 0.8); border-radius: 12px;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入前の課題</h4>
                    <ul style="color: #6B7280; line-height: 1.8; margin-bottom: 1.5rem; padding-left: 1.5rem;">
                        <li>問い合わせ対応に1件あたり平均2時間かかっていた</li>
                        <li>営業時間外の問い合わせに対応できず、顧客満足度が低い（満足度65%）</li>
                        <li>対応品質にばらつきがあり、顧客からのクレームが発生</li>
                    </ul>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入後の成果</h4>
                    <ul style="color: #6B7280; line-height: 1.8; padding-left: 1.5rem;">
                        <li>問い合わせ対応時間が平均36分に短縮（70%削減）</li>
                        <li>24時間365日の自動対応により、顧客満足度が98%に向上（33ポイント向上）</li>
                        <li>対応品質が統一され、クレームが90%減少</li>
                    </ul>
                </div>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">対応時間</span>
                        <span class="case-result-value">2時間 → 36分</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">顧客満足度</span>
                        <span class="case-result-value">65% → 98%</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">導入期間</span>
                        <span class="case-result-value">4ヶ月</span>
                    </div>
                </div>
                <div class="case-testimonial" style="margin-top: 1.5rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 12px; border-left: 4px solid #8B5CF6;">
                    <p style="color: #374151; font-style: italic; line-height: 1.8; margin-bottom: 1rem;">
                        「24時間365日の自動対応により、顧客からの評価が大幅に向上しました。対応時間も短縮され、社員の業務負担も軽減されました。導入から運用まで、マネーデザインさんのサポートが非常に充実していて安心でした。」
                    </p>
                    <p style="font-size: 0.9rem; color: #6B7280;">
                        <strong>製造業 営業部長</strong>（匿名希望）
                    </p>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">地方自治体</div>
                <h3 class="case-title">人口2万人規模の町役場の文書作成支援</h3>
                <div class="case-before-after" style="margin: 1.5rem 0; padding: 1.5rem; background: rgba(243, 244, 246, 0.8); border-radius: 12px;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入前の課題</h4>
                    <ul style="color: #6B7280; line-height: 1.8; margin-bottom: 1.5rem; padding-left: 1.5rem;">
                        <li>議事録や報告書の作成に1件あたり平均3時間かかっていた</li>
                        <li>職員の業務負担が大きく、重要な業務に集中できない</li>
                        <li>文書作成の品質にばらつきがある</li>
                    </ul>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入後の成果</h4>
                    <ul style="color: #6B7280; line-height: 1.8; padding-left: 1.5rem;">
                        <li>文書作成時間が平均1.2時間に短縮（60%削減）</li>
                        <li>職員の業務負担が軽減し、重要な業務に集中できるようになった</li>
                        <li>文書作成の品質が統一され、業務効率が40%向上</li>
                    </ul>
                </div>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">文書作成時間</span>
                        <span class="case-result-value">3時間 → 1.2時間</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">業務効率</span>
                        <span class="case-result-value">40%向上</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">導入期間</span>
                        <span class="case-result-value">2ヶ月</span>
                    </div>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">博物館</div>
                <h3 class="case-title">地方都市の歴史博物館のデジタルアーカイブ</h3>
                <div class="case-before-after" style="margin: 1.5rem 0; padding: 1.5rem; background: rgba(243, 244, 246, 0.8); border-radius: 12px;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入前の課題</h4>
                    <ul style="color: #6B7280; line-height: 1.8; margin-bottom: 1.5rem; padding-left: 1.5rem;">
                        <li>資料の検索に1件あたり平均30分かかっていた</li>
                        <li>学芸員の業務負担が大きく、来館者への情報提供が不十分</li>
                        <li>資料へのアクセスが限定的で、活用が進まない</li>
                    </ul>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入後の成果</h4>
                    <ul style="color: #6B7280; line-height: 1.8; padding-left: 1.5rem;">
                        <li>資料の検索時間が平均6分に短縮（80%削減）</li>
                        <li>学芸員の業務効率が向上し、来館者への情報提供が充実</li>
                        <li>資料へのアクセス数が3倍に増加</li>
                    </ul>
                </div>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">検索時間</span>
                        <span class="case-result-value">30分 → 6分</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">資料アクセス数</span>
                        <span class="case-result-value">3倍</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">導入期間</span>
                        <span class="case-result-value">3ヶ月</span>
                    </div>
                </div>
            </div>

            <div class="case-card">
                <div class="case-category">中小企業</div>
                <h3 class="case-title">従業員30名規模の小売業のマーケティング支援</h3>
                <div class="case-before-after" style="margin: 1.5rem 0; padding: 1.5rem; background: rgba(243, 244, 246, 0.8); border-radius: 12px;">
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入前の課題</h4>
                    <ul style="color: #6B7280; line-height: 1.8; margin-bottom: 1.5rem; padding-left: 1.5rem;">
                        <li>SNS投稿やメールマガジンの作成に1件あたり平均2時間かかっていた</li>
                        <li>コンテンツの質にばらつきがあり、顧客エンゲージメントが低い</li>
                        <li>マーケティング担当者の業務負担が大きく、他の業務に集中できない</li>
                    </ul>
                    <h4 style="font-size: 1.1rem; font-weight: 700; color: #374151; margin-bottom: 1rem;">導入後の成果</h4>
                    <ul style="color: #6B7280; line-height: 1.8; padding-left: 1.5rem;">
                        <li>コンテンツ作成時間が平均30分に短縮（75%削減）</li>
                        <li>コンテンツの質が統一され、顧客エンゲージメントが50%向上</li>
                        <li>マーケティング担当者の業務負担が軽減され、他の業務に集中できるようになった</li>
                    </ul>
                </div>
                <div class="case-results">
                    <div class="case-result-item">
                        <span class="case-result-label">コンテンツ作成時間</span>
                        <span class="case-result-value">2時間 → 30分</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">エンゲージメント</span>
                        <span class="case-result-value">50%向上</span>
                    </div>
                    <div class="case-result-item">
                        <span class="case-result-label">導入期間</span>
                        <span class="case-result-value">2ヶ月</span>
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
                <p class="cta-description">初回60分無料相談で、あなたの課題に最適な生成AI導入プランをご提案します。24時間以内にご返信いたします。</p>
                <div class="cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">今すぐ無料相談を申し込む（30秒で完了）</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

