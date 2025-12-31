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
    
    <div class="card" style="margin-bottom: 1.5rem;">
        <h2 class="section-title">検索</h2>
        <form method="GET" action="{{ route('blog.index') }}" style="display:flex; gap:.5rem; margin-bottom:1rem;">
            <input type="text" 
                   name="search" 
                   value="{{ $search }}" 
                   placeholder="タイトル・本文から検索..." 
                   style="flex:1; padding:.75rem; border:1px solid #e0e0e0; border-radius:4px;">
            <button type="submit" class="btn">検索</button>
            @if($search)
                <a href="{{ route('blog.index', ['category' => $selectedCategoryId]) }}" class="btn" style="background:#64748b;">クリア</a>
            @endif
        </form>
        
        @if($categories->count() > 0)
            <h3 style="margin-bottom:.5rem; font-size:1rem;">カテゴリで絞り込み</h3>
            <div style="display:flex; flex-wrap:wrap; gap:.5rem;">
                <a href="{{ route('blog.index', ['search' => $search]) }}" class="btn" style="{{ !$selectedCategoryId ? 'background:#3b82f6; color:white;' : '' }}">
                    すべて
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('blog.index', ['category' => $category->id, 'search' => $search]) }}" 
                       class="btn" 
                       style="{{ $selectedCategoryId == $category->id ? 'background:#3b82f6; color:white;' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    
    @if($search)
        <div class="alert alert-info" style="margin-bottom: 1.5rem;">
            「{{ $search }}」の検索結果: {{ $posts->total() }}件
        </div>
    @endif
    
    <div class="section">
        @forelse($posts as $post)
            <div class="card" style="margin-bottom: 1.5rem; display:flex; gap:1.5rem;">
                @if($post->thumbnail_path)
                    <div style="flex-shrink:0; width:300px;">
                        <a href="{{ route('blog.show', $post) }}">
                            <img src="{{ Storage::url($post->thumbnail_path) }}" 
                                 alt="{{ $post->title }}" 
                                 style="width:100%; height:200px; object-fit:cover; border-radius:8px;">
                        </a>
                    </div>
                @endif
                <div style="flex:1;">
                    <h2 class="section-title">
                        <a href="{{ route('blog.show', $post) }}" style="text-decoration:none; color:inherit;">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <p style="color:#666; margin-bottom:1rem;">
                        {{ $post->published_at->format('Y年m月d日') }}
                        @if($post->category)
                            <span style="margin-left:1rem;">
                                <a href="{{ route('blog.index', ['category' => $post->category->id]) }}" style="color:#3b82f6; text-decoration:none;">
                                    {{ $post->category->name }}
                                </a>
                            </span>
                        @endif
                    </p>
                    <p style="line-height:1.8;">
                        {{ Str::limit(strip_tags($post->content), 200) }}
                    </p>
                    <div style="margin-top:1rem;">
                        <a href="{{ route('blog.show', $post) }}" class="btn">続きを読む</a>
                    </div>
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

