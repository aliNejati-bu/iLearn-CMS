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
                            <a href="shop.html" class="btn btn-light btn-rounded slide-animate mb-1"
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
            <section class="mb-10">
                <div class="container">
                    <h2 class="title title-center mb-5">چه مطالبی دوست دارید؟</h2>
                    <div class="row">
                        <div class="col-xs-6 col-lg-3 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                <a href="shop.html">
                                    <figure class="category-media">
                                        <img src="images/categories/category1.jpg" alt="category" width="280"
                                            height="280" style="background-color: #8c8c8d;" />
                                    </figure>
                                </a>
                                <div class="category-content rtl">
                                    <h4 class="category-name font-weight-bold "><a href="shop.html">پوشاک آقایان</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-3 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                <a href="shop.html">
                                    <figure class="category-media">
                                        <img src="images/categories/category2.jpg" alt="category" width="280"
                                            height="280" style="background-color: #bcbdb7;" />
                                    </figure>
                                </a>
                                <div class="category-content rtl">
                                    <h4 class="category-name font-weight-bold ">
                                        <a href="shop.html">اکسسوری</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-3 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                <a href="shop.html">
                                    <figure class="category-media">
                                        <img src="images/categories/category3.jpg" alt="category" width="280"
                                            height="280" style="background-color: #ececef;" />
                                    </figure>
                                </a>
                                <div class="category-content rtl">
                                    <h4 class="category-name font-weight-bold "><a href="shop.html">پوشاک بانوان</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-3 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                <a href="shop.html">
                                    <figure class="category-media">
                                        <img src="images/categories/category4.jpg" alt="category" width="280"
                                            height="280" style="background-color: #e8eded;" />
                                    </figure>
                                </a>
                                <div class="category-content font-weight-bold">
                                    <h4 class="category-name font-weight-bold ">
                                        <a href="shop.html">لوازم آرایشی</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container w-100 d-flex justify-content-center">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" class="btn btn-block btn-icon-right btn-slide-down btn-sm"><i
                                class="d-icon-arrow-down"></i><span>مشاهده بیشتر</span></a>
                    </div>
                </div>
            </section>
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
                        <a href="shop.html" class="btn btn-primary btn-rounded btn-icon-right ">
                            ارسال درخواست<i class="d-icon-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </section>
            <section>
                <div class="container mt-10 pt-3">
                    <h2 class="title title-center mb-4">نویسندگان ما</h2>
                    <div class="code-template">
                        <div class="row cols-sm-2 cols-md-4 code-content">
                            <div class="image-box appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.3s'}">
                                <figure class="banner-radius">
                                    <img src="images/subpages/team2.jpg" alt="team image-box" width="280"
                                        height="280" style="background-color: #121A1F;">
                                    <div class="overlay social-links">
                                        <p class="fs-4">۱۴۰ مطلب نشر شده</p>
                                    </div>
                                </figure>
                                <h4 class="image-box-name">افسون هاشمی</h4>
                                <h5 class="image-box-job">مدیر پشتیبانی / موسس</h5>
                            </div>
                        </div>
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
                        <div class="blog-post mb-4">
                            <article class="post post-frame overlay-zoom">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="images/blog/frame/1.jpg" alt="Blog post" width="340" height="206"
                                            style="background-color: #919fbc;" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">اسفند</span>
                                    </div>
                                </figure>
                                <div class="post-details ">
                                    <h4 class="post-title">
                                        <a href="post-single.html">
                                            نحوه انتخاب لباس مناسب میهمانی
                                        </a>
                                    </h4>
                                    <p class="post-content">
                                        بسیار خوب که این محصول را انتخاب کردم! کیفیت بسیار بالا و قابل توجه است. بسته‌بندی
                                        محکم
                                        و ارسال سریع نیز از دقت و حرفه‌ای بودن شما خبر می‌دهد....
                                    </p>
                                    <a href="post-single.html" class="btn btn-primary btn-link btn-underline">
                                        بیشتر
                                        <i class="d-icon-arrow-left"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="blog-post mb-4">
                            <article class="post post-frame overlay-zoom">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="images/blog/frame/2.jpg" alt="Blog post" width="340" height="206"
                                            style="background-color: #e5e6e6;" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">12</span>
                                        <span class="post-month">مهر</span>
                                    </div>
                                </figure>
                                <div class="post-details ">
                                    <h4 class="post-title">
                                        <a href="post-single.html">
                                            کنار کت جین چه چیزهایی می شود ست کرد
                                        </a>
                                    </h4>
                                    <p class="post-content">
                                        بسیار خوب که این محصول را انتخاب کردم! کیفیت بسیار بالا و قابل توجه است. بسته‌بندی
                                        محکم
                                        و ارسال سریع نیز از دقت و حرفه‌ای بودن شما خبر می‌دهد....
                                    </p>
                                    <a href="post-single.html" class="btn btn-primary btn-link btn-underline">
                                        بیشتر
                                        <i class="d-icon-arrow-left"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="blog-post mb-4">
                            <article class="post post-frame overlay-zoom">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="images/blog/frame/3.jpg" alt="Blog post" width="340" height="206"
                                            style="background-color: #eaeef1;" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">آبان</span>
                                    </div>
                                </figure>
                                <div class="post-details ">
                                    <h4 class="post-title">
                                        <a href="post-single.html">
                                            ویژگی های یک بوت زنانه مناسب
                                        </a>
                                    </h4>
                                    <p class="post-content">
                                        بسیار خوب که این محصول را انتخاب کردم! کیفیت بسیار بالا و قابل توجه است. بسته‌بندی
                                        محکم
                                        و ارسال سریع نیز از دقت و حرفه‌ای بودن شما خبر می‌دهد....
                                    </p>
                                    <a href="post-single.html" class="btn btn-primary btn-link btn-underline">
                                        بیشتر
                                        <i class="d-icon-arrow-left"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
@endsection
