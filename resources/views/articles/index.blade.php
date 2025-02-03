@extends('layouts.master')

@section('title', 'مقالات')

@section('main')
    <nav class="breadcrumb-nav">
        <div class="container rtl">
            <ul class="breadcrumb">
                <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                <li><a href="#" class="active">وبلاگ</a></li>
                <li>متن روی تصویر درگرید</li>
            </ul>
        </div>
    </nav>
    <div class="page-content pb-10 mb-10">
        <div class="container">
            <ul class="nav-filters filter-underline blog-filters justify-content-center" data-target=".posts">
                <li><a href="#" class="nav-filter active" data-filter="*">همه</a><span>12</span></li>
                <li><a href="#" class="nav-filter" data-filter=".fashion">ترندها</a><span>1</span></li>
                <li><a href="#" class="nav-filter" data-filter=".lifestyle">لایف استایل</a><span>3</span></li>
                <li><a href="#" class="nav-filter" data-filter=".shopping">کوه نوردی</a><span>1</span></li>
                <li><a href="#" class="nav-filter" data-filter=".sport">ورزشی</a><span>1</span></li>
                <li><a href="#" class="nav-filter" data-filter=".summer-sale">تابستانه</a><span>1</span></li>
                <li><a href="#" class="nav-filter" data-filter=".travel">مسافرتی</a><span>2</span></li>
                <li><a href="#" class="nav-filter" data-filter=".winter-sale">زمستانه</a><span>1</span></li>
            </ul>
            <div class="posts grid post-grid row" data-grid-options="{
            'layoutMode': 'fitRows'
        }">
                <div class="grid-item col-sm-6 col-lg-4 lifestyle shopping winter-sale">
                    <article class="post post-mask gradient">
                        <figure class="post-media overlay-zoom">
                            <a href="post-single.html">
                                <img src="images/blog/mask/1.jpg" width="380" height="280" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details rtl">
                            <div class="post-meta">
                                تاریخ <a href="#" class="post-date">2 آبان 1402</a>
                                | <a href="#" class="post-comment"><span>2</span> نظر </a>
                            </div>
                            <h4 class="post-title">
                                <a href="post-single.html">
                                    اخبار هفته مد تهران در بهار 1403

                                </a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-underline btn-white">
                                بیشتر<i class="d-icon-arrow-left"></i>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="grid-item col-sm-6 col-lg-4 lifestyle sport">
                    <article class="post post-mask gradient">
                        <figure class="post-media overlay-zoom">
                            <a href="post-single.html">
                                <img src="images/blog/mask/2.jpg" width="380" height="250" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details rtl">
                            <div class="post-meta">
                                تاریخ <a href="#" class="post-date">2 آبان 1402</a>
                                | <a href="#" class="post-comment"><span>2</span> نظر </a>
                            </div>
                            <h4 class="post-title">
                                <a href="post-single.html">اخبار هفته مد تهران در بهار 1403</a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-underline btn-white">
                                بیشتر<i class="d-icon-arrow-left"></i>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="grid-item col-sm-6 col-lg-4 fashion lifestyle">
                    <article class="post post-mask gradient">
                        <figure class="post-media overlay-zoom">
                            <a href="post-single.html">
                                <img src="images/blog/mask/3.jpg" width="380" height="250" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details rtl">
                            <div class="post-meta">
                                تاریخ <a href="#" class="post-date">2 آبان 1402</a>
                                | <a href="#" class="post-comment"><span>2</span> نظر </a>
                            </div>
                            <h4 class="post-title">
                                <a href="post-single.html">
                                    اخبار هفته مد تهران در بهار 1403

                                </a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-underline btn-white">
                                بیشتر<i class="d-icon-arrow-left"></i>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="grid-item col-sm-6 col-lg-4 travel summer-sale">
                    <article class="post post-mask gradient">
                        <figure class="post-media overlay-zoom">
                            <a href="post-single.html">
                                <img src="images/blog/mask/4.jpg" width="380" height="250" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details rtl">
                            <div class="post-meta">
                                تاریخ <a href="#" class="post-date">2 آبان 1402</a>
                                | <a href="#" class="post-comment"><span>2</span> نظر </a>
                            </div>
                            <h4 class="post-title">
                                <a href="post-single.html">لباس تابستانی مد زنانه</a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-underline btn-white">
                                بیشتر<i class="d-icon-arrow-left"></i>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="grid-item col-sm-6 col-lg-4 travel hobbies">
                    <article class="post post-mask gradient">
                        <figure class="post-media overlay-zoom">
                            <a href="post-single.html">
                                <img src="images/blog/mask/5.jpg" width="380" height="250" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details rtl">
                            <div class="post-meta">
                                تاریخ <a href="#" class="post-date">2 آبان 1402</a>
                                | <a href="#" class="post-comment"><span>2</span> نظر </a>
                            </div>
                            <h4 class="post-title">
                                <a href="post-single.html">
                                    بهترین انتخاب برای تبلت و تجهیزات جانبی
                                </a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-underline btn-white">
                                بیشتر<i class="d-icon-arrow-left"></i>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="grid-item col-sm-6 col-lg-4 hobbies">
                    <article class="post post-mask gradient">
                        <figure class="post-media overlay-zoom">
                            <a href="post-single.html">
                                <img src="images/blog/mask/6.jpg" width="380" height="250" alt="post" />
                            </a>
                        </figure>
                        <div class="post-details rtl">
                            <div class="post-meta">
                                تاریخ <a href="#" class="post-date">2 آبان 1402</a>
                                | <a href="#" class="post-comment"><span>2</span> نظر </a>
                            </div>
                            <h4 class="post-title">
                                <a href="post-single.html">
                                    بهترین انتخاب برای هزینه کردن
                                </a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-underline btn-white">
                                بیشتر<i class="d-icon-arrow-left"></i>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
            <ul class="pagination pt-4 rtl">
                <li class="page-item disabled">
                    <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                        aria-disabled="true">
                        <i class="d-icon-arrow-right"></i>قبلی
                    </a>
                </li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link page-link-next" href="#" aria-label="Next">
                        بعدی<i class="d-icon-arrow-left"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
