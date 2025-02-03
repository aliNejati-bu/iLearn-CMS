@extends('layouts.master')

@section('title', 'صفحه اصلی')

@section('main')
    <div class="page-content">
        <section class="intro-section ltr">
            <div class="owl-carousel owl-theme owl-rtl row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no ltr"
                data-owl-options="{
                'nav': false,
                'dots': true,
                'loop': false,
                'items': 1,
                'autoplay': false,
                'autoplayTimeout': 8000
            }">
                <div class="banner banner-fixed" style="background-color: #6bc1d7;">
                    <figure>
                        <video width="1903" height="630"></video>
                    </figure>
                    <div class="container">
                        <div class="banner-content x-50 y-50 text-center rtl">
                            <h2 class="banner-title mb-3 text-white font-weight-bold text-uppercase ls-m slide-animate"
                                data-animation-options="{'name': 'fadeInUp', 'duration': '.7s', 'delay': '.5s'}">
                                آیلرن
                            </h2>
                            <h4 class="banner-subtitle text-white text-uppercase mb-3 ls-normal slide-animate"
                                data-animation-options="{'name': 'fadeIn', 'duration': '.7s'}">با بیش از ۱۰ سال سابقه</h4>
                            <p class="slide-animate mb-7 text-white ls-s font-primary "
                                data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '.8s'}">
                                مطالب آموزنده توسط نویسنده های باتجربه
                            </p>
                            <a href="{{ route('articles.index') }}" class="btn btn-light btn-rounded slide-animate mb-1"
                                data-animation-options="{'name': 'fadeInLeft', 'duration': '1s', 'delay': '1.5s'}">
                                مشاهده مطالب<i class="d-icon-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-10 mt-7 appear-animate" data-animation-options="{
            'delay': '.3s'
        }">
            <section class="banner banner-background parallax text-center" data-option="{'offset': -60}"
                data-image-src="images/demos/demo1/parallax.jpg" style="background-color: #2d2f33;">
                <div class="container rtl">
                    <div class="banner-content appear-animate"
                        data-animation-options="{'name': 'blurIn', 'duration': '1s', 'delay': '.2s'}">
                        <h4 class="banner-subtitle text-white font-weight-bold ls-l">
                            همکار <span class="d-inline-block label-star bg-dark text-primary ml-4 mr-2">آیلرن
                            </span>شوید
                        </h4>
                        <h3 class="banner-title font-weight-bold text-white">دوست دارید نویسنده باشید؟</h3>
                        <p class="text-white ls-s">علم خود را با مطالب آیلرن با بقیه به اشتراک بگذارید</p>
                        <a href="{{ route('soon') }}" class="btn btn-primary btn-rounded btn-icon-right ">
                            ارسال درخواست<i class="d-icon-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </section>
            <section class="blog-post-wrapper mt-6 mt-md-10 pt-7 appear-animate"
                data-animation-options="{'name': 'fadeIn', 'duration': '1s'}">
                <div class="container">
                    <h2 class="title title-center">جدیدترین مطالب وبلاگ</h2>
                    <div class="owl-carousel owl-theme post-slider row cols-lg-3 cols-sm-2 cols-1"
                        data-owl-options="{
                     'rtl':true,
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                     'dirction':'.rtl'
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '992': {
                            'items': 3,
                            'dots': false
                        }
                    }
                }">
                        @foreach (App\Models\Article::latest()->get()->take(3) as $article)
                            <div class="blog-post mb-4">
                                <article class="post post-frame overlay-zoom">
                                    <figure class="post-media" style="height: 20rem;">
                                        <a href="{{ route('articles.show', $article->id) }}">
                                            <img src="{{ '/storage/' . $article->image }}" style="background-color: #e5e6e6; height: 100%; object-fit: cover;" />
                                        </a>
                                        <div class="post-calendar">
                                            <span class="post-day">{{ $article->created_at->day }}</span>
                                            <span class="post-month">{{ $article->created_at->monthName }}</span>
                                        </div>
                                    </figure>
                                    <div class="post-details ">
                                        <h4 class="post-title">
                                            <a href="{{ route('articles.show', $article->id) }}">
                                                {{ $article->title }}
                                            </a>
                                        </h4>
                                        <p class="post-content">
                                            {!! strip_tags($article->body) !!}
                                        </p>
                                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary btn-link btn-underline">
                                            بیشتر
                                            <i class="d-icon-arrow-left"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </section>
    </div>
@endsection
