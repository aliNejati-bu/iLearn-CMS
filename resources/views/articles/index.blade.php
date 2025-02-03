@extends('layouts.master')

@section('title', 'مقالات')

@section('main')
    <div class="page-content pb-10 mb-10">
        <div class="container">
            <ul class="nav-filters filter-underline blog-filters justify-content-center" data-target=".posts">
                <li><a href="#" class="nav-filter active" data-filter="*">همه</a><span>{{ $articles->count() }}</span>
                </li>
                @foreach ($categories as $category)
                    <li><a href="#" class="nav-filter"
                            data-filter=".category-{{ $category->id }}">{{ $category->name }}</a><span>{{ $category->articles->count() }}</span>
                    </li>
                @endforeach
            </ul>
            <div class="posts grid post-grid row" data-grid-options="{
            'layoutMode': 'fitRows'
        }">
                @foreach ($articles as $article)
                    <div class="grid-item col-sm-6 col-lg-4 {{ 'category-' . $article->category->id }}">
                        <article class="post post-mask gradient">
                            <figure class="post-media overlay-zoom" style="height: 25rem;">
                                <a href="{{ route('articles.show', $article->id) }}">
                                    <img src="{{ '/storage/' . $article->image }}"  alt="post" style="height: 100%; object-fit: cover;" />
                                </a>
                            </figure>
                            <div class="post-details rtl">
                                <div class="post-meta">
                                    <a href="#" class="post-comment"><span>{{ $article->comments->count() }}</span> نظر </a> | تاریخ <a href="#" class="post-date">{{ $article->created_at->toFormattedDateString() }}</a>
                                </div>
                                <h4 class="post-title">
                                    <a href="{{ route('articles.show', $article->id) }}">
                                        {{ $article->title }}
                                    </a>
                                </h4>
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-link btn-underline btn-white">
                                    بیشتر<i class="d-icon-arrow-left"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            {{ $articles->links() }}
        </div>
    </div>
@endsection
