@extends('layouts.public')

@section('title', $post->title . ' - ブログ・お知らせ - 株式会社マネーデザイン | 生成AI導入支援')

@section('description', Str::limit(strip_tags($post->content), 160))

@section('keywords', '生成AIブログ,AI導入ブログ,AI情報,マネーデザイン,ブログ,お知らせ')

@section('og_title', $post->title . ' - 株式会社マネーデザイン')
@section('og_description', Str::limit(strip_tags($post->content), 160))
@section('og_url', route('blog.show', $post))
@section('og_type', 'article')

@section('twitter_title', $post->title . ' - 株式会社マネーデザイン')
@section('twitter_description', Str::limit(strip_tags($post->content), 160))

@push('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "BlogPosting",
  "headline": "{{ $post->title }}",
  "description": "{{ Str::limit(strip_tags($post->content), 200) }}",
  "datePublished": "{{ $post->published_at->toIso8601String() }}",
  "dateModified": "{{ $post->updated_at->toIso8601String() }}",
  "url": "{{ route('blog.show', $post) }}",
  "author": {
    "@@type": "Organization",
    "name": "株式会社マネーデザイン"
  },
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
    <div style="margin-bottom: 2rem;">
        <a href="{{ route('blog.index') }}" style="text-decoration:none; color:#3b82f6;">← ブログ一覧に戻る</a>
    </div>

    <article class="card">
        <h1 class="page-title">{{ $post->title }}</h1>
        <p style="color:#666; margin-bottom:2rem;">
            {{ $post->published_at->format('Y年m月d日') }}
        </p>
        <div style="white-space:pre-wrap; line-height:1.8;">{{ $post->content }}</div>
    </article>

    <div style="margin-top: 2rem; text-align:center;">
        <a href="{{ route('blog.index') }}" class="btn">ブログ一覧に戻る</a>
    </div>
</div>
@endsection

