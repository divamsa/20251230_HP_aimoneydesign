@extends('layouts.public')

@section('title', 'お問い合わせ - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', '生成AI導入支援サービスに関するお問い合わせはこちらから。一般問い合わせ、資料請求、無料相談の3つのフォームをご用意しています。24時間受付可能です。')

@section('keywords', 'お問い合わせ,問い合わせフォーム,資料請求,無料相談,生成AI導入,マネーデザイン')

@section('og_title', 'お問い合わせ - 株式会社マネーデザイン | 生成AI導入支援')
@section('og_description', '生成AI導入支援サービスに関するお問い合わせはこちらから。一般問い合わせ、資料請求、無料相談の3つのフォームをご用意しています。')
@section('og_url', route('contact'))
@section('og_type', 'website')

@section('twitter_title', 'お問い合わせ - 株式会社マネーデザイン')
@section('twitter_description', '生成AI導入支援サービスに関するお問い合わせはこちらから。一般問い合わせ、資料請求、無料相談の3つのフォームをご用意しています。')

@push('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "ContactPage",
  "name": "お問い合わせ",
  "description": "生成AI導入支援サービスに関するお問い合わせ",
  "url": "{{ route('contact') }}",
  "mainEntity": {
    "@@type": "Organization",
    "name": "株式会社マネーデザイン",
    "url": "{{ route('top') }}",
    "contactPoint": {
      "@@type": "ContactPoint",
      "contactType": "お問い合わせ",
      "url": "{{ route('contact') }}"
    }
  }
}
</script>
@endpush

@section('content')
<div class="container">
    <h1 class="page-title">お問い合わせ</h1>
    <p class="page-subtitle">お問い合わせフォーム</p>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="section">
        <!-- 一般問い合わせフォーム -->
        <div class="card" style="margin-bottom: 2rem;">
            <h2 class="section-title">一般問い合わせ</h2>
            <form action="{{ route('contact.inquiry') }}" method="POST" class="contact-form" data-form-type="inquiry">
                @csrf
                <input type="hidden" name="recaptcha_token" id="recaptcha_token_inquiry">
                <div class="form-group">
                    <label for="inquiry_name">お名前 <span class="required">*</span></label>
                    <input type="text" id="inquiry_name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="inquiry_company">会社名・組織名 <span class="required">*</span></label>
                    <input type="text" id="inquiry_company" name="company_name" value="{{ old('company_name') }}" required>
                </div>
                <div class="form-group">
                    <label for="inquiry_email">メールアドレス <span class="required">*</span></label>
                    <input type="email" id="inquiry_email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="inquiry_phone">電話番号 <span class="required">*</span></label>
                    <input type="tel" id="inquiry_phone" name="phone" value="{{ old('phone') }}" required>
                </div>
                <div class="form-group">
                    <label for="inquiry_type">問い合わせ種別 <span class="required">*</span></label>
                    <select id="inquiry_type" name="inquiry_type" required>
                        <option value="">選択してください</option>
                        <option value="service" {{ old('inquiry_type') == 'service' ? 'selected' : '' }}>サービスについて</option>
                        <option value="price" {{ old('inquiry_type') == 'price' ? 'selected' : '' }}>料金について</option>
                        <option value="other" {{ old('inquiry_type') == 'other' ? 'selected' : '' }}>その他</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inquiry_message">問い合わせ内容 <span class="required">*</span></label>
                    <textarea id="inquiry_message" name="message" rows="5" required>{{ old('message') }}</textarea>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="privacy_agreed" value="1" required>
                        個人情報の取り扱いに同意します <span class="required">*</span>
                    </label>
                </div>
                <button type="submit" class="btn">送信する</button>
            </form>
        </div>

        <!-- 資料請求フォーム -->
        <div class="card" style="margin-bottom: 2rem;">
            <h2 class="section-title">資料請求</h2>
            <form action="{{ route('contact.download') }}" method="POST" class="contact-form" data-form-type="download">
                @csrf
                <input type="hidden" name="recaptcha_token" id="recaptcha_token_download">
                <div class="form-group">
                    <label for="download_name">お名前 <span class="required">*</span></label>
                    <input type="text" id="download_name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="download_company">会社名・組織名 <span class="required">*</span></label>
                    <input type="text" id="download_company" name="company_name" value="{{ old('company_name') }}" required>
                </div>
                <div class="form-group">
                    <label for="download_email">メールアドレス <span class="required">*</span></label>
                    <input type="email" id="download_email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="download_phone">電話番号 <span class="required">*</span></label>
                    <input type="tel" id="download_phone" name="phone" value="{{ old('phone') }}" required>
                </div>
                <div class="form-group">
                    <label>希望資料 <span class="required">*</span></label>
                    <div>
                        <label><input type="checkbox" name="requested_materials[]" value="service"> サービス資料</label>
                        <label><input type="checkbox" name="requested_materials[]" value="case"> 導入事例集</label>
                        <label><input type="checkbox" name="requested_materials[]" value="price"> 料金表</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="privacy_agreed" value="1" required>
                        個人情報の取り扱いに同意します <span class="required">*</span>
                    </label>
                </div>
                <button type="submit" class="btn">送信する</button>
            </form>
        </div>

        <!-- 無料相談申し込みフォーム -->
        <div class="card">
            <h2 class="section-title">無料相談申し込み</h2>
            <form action="{{ route('contact.consultation') }}" method="POST" class="contact-form" data-form-type="consultation">
                @csrf
                <input type="hidden" name="recaptcha_token" id="recaptcha_token_consultation">
                <div class="form-group">
                    <label for="consultation_name">お名前 <span class="required">*</span></label>
                    <input type="text" id="consultation_name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="consultation_company">会社名・組織名 <span class="required">*</span></label>
                    <input type="text" id="consultation_company" name="company_name" value="{{ old('company_name') }}" required>
                </div>
                <div class="form-group">
                    <label for="consultation_email">メールアドレス <span class="required">*</span></label>
                    <input type="email" id="consultation_email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="consultation_phone">電話番号 <span class="required">*</span></label>
                    <input type="tel" id="consultation_phone" name="phone" value="{{ old('phone') }}" required>
                </div>
                <div class="form-group">
                    <label for="consultation_datetime">希望日時 <span class="required">*</span></label>
                    <input type="datetime-local" id="consultation_datetime" name="preferred_datetime" value="{{ old('preferred_datetime') }}" required>
                </div>
                <div class="form-group">
                    <label for="consultation_content">相談内容 <span class="required">*</span></label>
                    <textarea id="consultation_content" name="consultation_content" rows="5" required>{{ old('consultation_content') }}</textarea>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="privacy_agreed" value="1" required>
                        個人情報の取り扱いに同意します <span class="required">*</span>
                    </label>
                </div>
                <button type="submit" class="btn">送信する</button>
            </form>
        </div>
    </div>

    <!-- FAQセクション -->
    <section class="faq">
        <h2 class="section-title">よくある質問（FAQ）</h2>
        <div class="faq-list">
            <div class="faq-item">
                <h3 class="faq-question">生成AI導入にはどのくらいの期間がかかりますか？</h3>
                <p class="faq-answer">
                    導入規模や内容によって異なりますが、一般的には1〜3ヶ月程度です。まずは無料相談でお気軽にご相談ください。
                </p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">導入費用はどのくらいかかりますか？</h3>
                <p class="faq-answer">
                    導入規模や内容によって異なります。まずは無料相談でお見積もりをご提案させていただきます。
                </p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">導入後のサポートはありますか？</h3>
                <p class="faq-answer">
                    はい、導入後も運用サポートや改善提案を継続的に提供しています。お客様の成功をサポートします。
                </p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">どのような業界に対応していますか？</h3>
                <p class="faq-answer">
                    中小企業、地方自治体、博物館・美術館、非営利団体など、様々な組織に対応しています。まずはお気軽にご相談ください。
                </p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">無料相談はどのような内容ですか？</h3>
                <p class="faq-answer">
                    現状の課題や生成AI導入の可能性について、お気軽にご相談いただけます。無料でご相談いただけますので、まずはお問い合わせください。
                </p>
            </div>
        </div>
    </section>

    <!-- 連絡先情報セクション -->
    <section class="contact-info">
        <h2 class="section-title">連絡先情報</h2>
        <div class="contact-info-grid">
            <div class="contact-info-card">
                <h3 class="contact-info-title">株式会社マネーデザイン</h3>
                <div class="contact-info-details">
                    <p><strong>住所:</strong> 東京都</p>
                    <p><strong>電話:</strong> 03-XXXX-XXXX</p>
                    <p><strong>メール:</strong> info@moneydesign.co.jp</p>
                    <p><strong>営業時間:</strong> 平日 9:00〜18:00</p>
                </div>
            </div>
            <div class="contact-info-card">
                <h3 class="contact-info-title">お問い合わせ方法</h3>
                <div class="contact-info-details">
                    <p>以下の方法でお問い合わせいただけます：</p>
                    <ul>
                        <li>お問い合わせフォーム（24時間受付）</li>
                        <li>電話（平日 9:00〜18:00）</li>
                        <li>メール（24時間受付）</li>
                    </ul>
                    <p>無料相談も承っておりますので、お気軽にご連絡ください。</p>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
@if(config('recaptcha.site_key'))
<script>
document.addEventListener('DOMContentLoaded', function() {
    const siteKey = '{{ config('recaptcha.site_key') }}';
    
    // reCAPTCHAが読み込まれていない場合はスキップ
    if (typeof grecaptcha === 'undefined') {
        console.warn('reCAPTCHA is not loaded. Skipping verification.');
        return;
    }

    // 各フォームにイベントリスナーを追加
    document.querySelectorAll('.contact-form').forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formType = form.getAttribute('data-form-type');
            const tokenInput = form.querySelector('input[name="recaptcha_token"]');
            
            // reCAPTCHAトークンを取得
            grecaptcha.ready(function() {
                grecaptcha.execute(siteKey, {action: 'submit'}).then(function(token) {
                    // トークンをhidden inputに設定
                    tokenInput.value = token;
                    
                    // フォームを送信
                    form.submit();
                }).catch(function(error) {
                    console.error('reCAPTCHA error:', error);
                    alert('reCAPTCHAの検証に失敗しました。ページを再読み込みして再度お試しください。');
                });
            });
        });
    });
});
</script>
@endif
@endpush
@endsection

