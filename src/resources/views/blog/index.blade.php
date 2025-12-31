@extends('layouts.public')

@section('title', 'ブログ・お知らせ - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', '生成AI導入支援に関するブログ記事やお知らせを掲載しています。生成AIの最新情報、導入事例、活用方法などをご紹介します。')

@section('keywords', '生成AIブログ,AI導入ブログ,AI情報,マネーデザイン,ブログ,お知らせ')

@section('og_title', 'ブログ・お知らせ - 株式会社マネーデザイン | 生成AI導入支援')
@section('og_description', '生成AI導入支援に関するブログ記事やお知らせを掲載しています。生成AIの最新情報、導入事例、活用方法などをご紹介します。')
@section('og_url', route('blog.index'))
@section('og_type', 'website')

@section('twitter_title', 'ブログ・お知らせ - 株式会社マネーデザイン')
@section('twitter_description', '生成AI導入支援に関するブログ記事やお知らせを掲載しています。生成AIの最新情報、導入事例、活用方法などをご紹介します。')

@push('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Blog",
  "name": "株式会社マネーデザイン ブログ",
  "description": "生成AI導入支援に関するブログ記事やお知らせ",
  "url": "{{ route('blog.index') }}",
  "publisher": {
    "@@type": "Organization",
    "name": "株式会社マネーデザイン",
    "url": "{{ route('top') }}"
  }
}
</script>
@endpush

@section('content')
<div class="container">
    <h1 class="page-title">ブログ・お知らせ</h1>
    <p class="page-subtitle">ブログ記事一覧</p>
    
    <div class="section">
        @forelse($posts as $post)
            <div class="card" style="margin-bottom: 1.5rem;">
                <h2 class="section-title">
                    <a href="{{ route('blog.show', $post) }}" style="text-decoration:none; color:inherit;">
                        {{ $post->title }}
                    </a>
                </h2>
                <p style="color:#666; margin-bottom:1rem;">
                    {{ $post->published_at->format('Y年m月d日') }}
                </p>
                <p style="line-height:1.8;">
                    {{ Str::limit(strip_tags($post->content), 200) }}
                </p>
                <div style="margin-top:1rem;">
                    <a href="{{ route('blog.show', $post) }}" class="btn">続きを読む</a>
                </div>
            </div>
        @empty
            <div class="card">
                <p>ブログ記事はまだありません。</p>
            </div>
        @endforelse

        <div style="margin-top: 2rem;">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection

