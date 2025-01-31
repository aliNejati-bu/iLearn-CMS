<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="webnotech">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/ilearn.png">
    <!-- Preload Font -->
    <link rel="preload" href="/fonts/riode.ttf?5gap68" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">
    <script>
        WebFontConfig = {
            google: { families: ['vazir:300,400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <link rel="stylesheet" type="text/css" href="/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/sticky-icon/stickyicon.css">
    <!-- Font Vazir -->
    <link href="/fonts/vazir/font-vazir.css" rel="stylesheet" />
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="/css/demo1.min.css">
</head>
<body class="home">
    <div class="page-wrapper">
        <x-header />
        <!-- End Header -->
        <main class="main rtl text-right">
            @yield('main')
        </main>
        <!-- End of Main -->
        <footer class="footer rtl text-right">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="demo1.html" class="logo-footer">
                                <img src="images/logo-footer.png" alt="logo-footer" width="154" height="43" />
                            </a>
                            <!-- End FooterLogo -->
                        </div>
                        <div class="col-lg-9">
                            <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                                <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                                    <h4 class="widget-title">عضویت در وبسایت</h4>
                                    <p>جزء اولین کسانی باشید که از تخفیف ها و محصولات جدید ما باخبر می شوند.</p>
                                </div>
                                <form action="#" class="input-wrapper input-wrapper-inline">
                                    <input type="email" class="form-control text-left" name="email" id="email"
                                        placeholder="آدرس ایمیل" required />
                                    <button class="btn btn-primary btn-rounded btn-md mr-2" type="submit"> عضویت <i
                                            class="d-icon-arrow-left"></i> </button>
                                </form>
                            </div>
                            <!-- End Newsletter -->
                        </div>
                    </div>
                </div>
                <!-- End FooterTop -->
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-info">
                                <h4 class="widget-title">اطلاعات تماس</h4>
                                <ul class="widget-body ">
                                    <li>
                                        <label>شماره تلفن:</label>
                                        <a href="tel:#">09112345678</a>
                                    </li>
                                    <li>
                                        <label>ایمیل:</label>
                                        <a href="#">mail@sample.com</a>
                                    </li>
                                    <li>
                                        <label>آدرس:</label>
                                        <a href="#">تهران ، خیابان آرژانتین </a>
                                    </li>
                                    <li>
                                        <label>ساعات کاری:</label>
                                        <a href="#">8 صبح تا 9 شب</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">حساب کاربری</h4>
                                <ul class="widget-body ">
                                    <li>
                                        <a href="about-us.html">درباره ما</a>
                                    </li>
                                    <li>
                                        <a href="#">لیست سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#">پرسش های متداول</a>
                                    </li>
                                    <li>
                                        <a href="#">خدمات مشتریان</a>
                                    </li>
                                    <li>
                                        <a href="#">قوانین و مقررات</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">صفحات وبسایت</h4>
                                <ul class="widget-body ">
                                    <li>
                                        <a href="#">ورود یا ثبت نام</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">سبد خرید</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">لیست علاقمندی</a>
                                    </li>
                                    <li>
                                        <a href="#">پیگیری سفارش</a>
                                    </li>
                                    <li>
                                        <a href="#">راهنمای خرید</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-instagram">
                                <h4 class="widget-title">نمادهای اعتماد</h4>
                                <figure class="widget-body row">
                                    <div class="nemad-box"><img src="images/enemad.png" alt="نماد اعتماد الکترونیک"></div>
                                    <div class="nemad-box"><img src="images/samandehi.png" alt="نماد ساماندهی"></div>
                                </figure>
                            </div>
                            <!-- End Instagram -->
                        </div>
                    </div>
                </div>
                <!-- End FooterMiddle -->
                <div class="footer-bottom">
                    <div class="footer-right">
                        <figure class="payment">
                            <img src="images/payment.png" alt="payment" width="159" height="29" />
                        </figure>
                    </div>
                    <div class="footer-center">
                        <p class="copyright">فروشگاه  آنلاین  ریود 1402 &copy;  کلیه حقوق محفوظ است .</p>
                    </div>
                    <div class="footer-left ">
                        <div class="social-links">
                            <a href="#" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
                        </div>
                    </div>
                </div>
                <!-- End FooterBottom -->
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom rtl">
        <a href="demo1.html" class="sticky-link">
            <i class="d-icon-home"></i>
            <span>خانه</span>
        </a>
        <a href="shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>محصول</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>علاقمندی</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>کاربری</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>جستجو</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="جستجو ..." required />
                <button class="btn btn-search" type="submit" title="submit-button">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>
    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                       placeholder="جستجو ..." required />
                <button class="btn btn-search" type="submit" title="submit-button">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="demo1.html">صفحه اصلی</a>
                </li>
                <li>
                    <a href="shop.html" class="active">دسته بندی</a>
                    <ul>
                        <li>
                            <a href="#">فیلتر ها و بنر ها</a>
                            <ul>
                                <li><a href="shop-classic-filter.html">فیلتر کلاسیک</a></li>
                                <li><a href="shop-right-toggle-sidebar.html"> فیلتر سمت راست ( بازشونده )</a> </li>
                                <li><a href="shop-left-toggle-sidebar.html">فیلتر سمت چپ ( بازشونده )</a>  </li>
                                <li><a href="shop-horizontal-filter.html">فیلتر افقی</a></li>
                                <li><a href="shop-navigation-filter.html">فیلتر منو</a></li>
                                <li><a href="shop-off-canvas-filter.html">فیلتر ساید ( جانبی )</a></li>
                                <li><a href="shop-top-banner.html">بنر بالای صفحه</a></li>
                                <li><a href="shop-inner-top-banner.html">بنر بالای لیست</a></li>
                                <li><a href="shop-with-bottom-block.html">دسته بندی بلوکی</a></li>
                                <li><a href="shop-category-in-page-header.html">دسته بندی در هدر</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                گرید بندی
                            </a>
                            <ul>
                                <li><a href="shop-grid-3cols.html">گریدبندی 3 ستونه</a></li>
                                <li><a href="shop-grid-4cols.html">گریدبندی 4 ستونه</a></li>
                                <li><a href="shop-grid-5cols.html">گریدبندی 5 ستونه</a></li>
                                <li><a href="shop-grid-6cols.html">گریدبندی 6 ستونه</a></li>
                                <li><a href="shop-grid-7cols.html">گریدبندی 7 ستونه</a></li>
                                <li><a href="shop-grid-8cols.html">گریدبندی 8 ستونه</a></li>
                                <li><a href="shop-list-mode.html">گرید لیست</a></li>
                                <li><a href="shop-pagination.html">گرید صفحه بندی</a></li>
                                <li><a href="shop-infinite-ajaxscroll.html">آژاکس بی نهایت ( اسکرول بی‌پایان ) </a></li>
                                <li><a href="shop-loadmore-button.html">لود با دکمه بیشتر</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">گرید فروشگاهی</a>
                            <ul>
                                <li><a href="shop-category-grid-shop.html">دسته بندی گریدی</a></li>
                                <li><a href="shop-category-products.html">دسته بندی + محصولات </a></li>
                                <li><a href="shop-default-1.html">فروشگاه پیش فرض 1 </a></li>
                                <li><a href="shop-default-2.html">فروشگاه پیش فرض 2</a></li>
                                <li><a href="shop-default-3.html">فروشگاه پیش فرض 3</a></li>
                                <li><a href="shop-default-4.html">فروشگاه پیش فرض 4</a></li>
                                <li><a href="shop-default-5.html">فروشگاه پیش فرض 5</a> </li>
                                <li><a href="shop-default-6.html">فروشگاه پیش فرض 6</a></li>
                                <li><a href="shop-default-7.html">فروشگاه پیش فرض 7</a></li>
                                <li><a href="shop-default-8.html">فروشگاه پیش فرض 8</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">محصولات</a>
                    <ul>
                        <li>
                            <a href="#">انواع صفحه محصول</a>
                            <ul>
                                <li><a href="product-simple.html">نمایش ساده محصول</a></li>
                                <li><a href="product-featured.html">نمایش ویژه محصول</a></li>
                                <li><a href="product.html">نمایش متغییر محصول</a></li>
                                <li><a href="product-variable-swatch.html">نمایش تغییرات محصول</a> </li>
                                <li><a href="product-grouped.html">نمایش گروهی محصول</a></li>
                                <li><a href="product-external.html">نمایش لینک خارجی محصول</a></li>
                                <li><a href="product-in-stock.html">نمایش موجود در انبار محصول</a></li>
                                <li><a href="product-out-stock.html">نمایش ناموجود در انبار محصول</a></li>
                                <li><a href="product-upsell.html">نمایش پرفروش ترین محصولات</a></li>
                                <li><a href="product-cross-sell.html">پیشنهاد مرتبط با محصول انتخابی</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">انواع چیدمان محصولات</a>
                            <ul>
                                <li><a href="product-vertical.html">چیدمان عمودی</a></li>
                                <li><a href="product-horizontal.html">چیدمان افقی</a></li>
                                <li><a href="product-gallery.html">چیدمان گالری</a></li>
                                <li><a href="product-grid.html">تصاویر گریدی</a></li>
                                <li><a href="product-masonry.html">تصاویر سنگفرشی</a></li>
                                <li><a href="product-sticky.html">اطلاعات چسبیده ( استیکی )</a></li>
                                <li><a href="product-sticky-both.html">چپ وراست چسبیده ( استیکی )</a></li>
                                <li><a href="product-left-sidebar.html">با سایدبار سمت چپ</a></li>
                                <li><a href="product-right-sidebar.html">با سایدبار سمت راست</a></li>
                                <li><a href="product-full.html">چیدمان کامل محصول </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">دیگر امکانات محصول</a>
                            <ul>
                                <li><a href="product-sale.html">شمارش معکوس فروش</a></li>
                                <li><a href="product-hurryup.html">نوتیفیکیشن آخرین فرصت</a></li>
                                <li><a href="product-attribute-guide.html">با راهنمای اندازه</a></li>
                                <li><a href="product-sticky-cart.html">اضافه به خرید چسبیده</a></li>
                                <li><a href="product-thumbnail-label.html">برچسب روی تصویر</a></li>
                                <li><a href="product-more-description.html"> تب توضیحات بیشتر</a></li>
                                <li><a href="product-accordion-data.html">اطلاعات در آکاردئون</a></li>
                                <li><a href="product-tabinside.html">اطلاعات در داخل </a></li>
                                <li><a href="product-video.html">برچسب روی ویدئو </a></li>
                                <li><a href="product-360-degree.html">برچسب روی 360 درجه</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">صفحات</a>
                    <ul>
                        <li><a href="about-us.html">درباره ما</a></li>
                        <li><a href="contact-us.html">تماس با ما</a></li>
                        <li><a href="account.html">حساب کاربری</a></li>
                        <li><a href="wishlist.html">علاقه مندی</a></li>
                        <li><a href="faq.html">سوالات متداول</a></li>
                        <li>
                            <a href="error-404.html">خطای 404</a>
                            <ul>
                                <li><a href="error-404.html">خطای 404-1</a></li>
                                <li><a href="error-404-1.html">خطای 404-2</a></li>
                                <li><a href="error-404-2.html">خطای 404-3</a></li>
                                <li><a href="error-404-3.html">خطای 404-4</a></li>
                            </ul>
                        </li>
                        <li><a href="coming-soon.html">بزودی</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-classic.html">وبلاگ</a>
                    <ul>
                        <li><a href="blog-classic.html">کلاسیک</a></li>
                        <li><a href="blog-listing.html">وبلاگ لیست وار</a></li>
                        <li>
                            <a href="#">گرید وبلاگ</a>
                            <ul>
                                <li><a href="blog-grid-2col.html">وبلاگ  2 ستونه</a></li>
                                <li><a href="blog-grid-3col.html">وبلاگ  3 ستونه</a></li>
                                <li><a href="blog-grid-4col.html">وبلاگ  4 ستونه</a></li>
                                <li><a href="blog-grid-sidebar.html">وبلاگ با سایدبار</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">کاشی کاری</a>
                            <ul>
                                <li><a href="blog-masonry-2col.html">کاشی کاری 2 ستونه</a></li>
                                <li><a href="blog-masonry-3col.html">کاشی کاری 3 ستونه</a></li>
                                <li><a href="blog-masonry-4col.html">کاشی کاری 4 ستونه</a></li>
                                <li><a href="blog-masonry-sidebar.html">کاشی کاری با سایدبار( نوار جانبی )</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">متن روی تصویر</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">متن روی تصویر درگرید</a></li>
                                <li><a href="blog-mask-masonry.html">متن روی تصویر در کاشی کاری</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-single.html">پست تکی</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="element.html">المان ها</a>
                    <ul>
                        <li>
                            <a href="#">المان ها 1</a>
                            <ul>
                                <li><a href="element-accordions.html">آکاردئون</a></li>
                                <li><a href="element-alerts.html">نوتیفیکیشن و هشدارها</a></li>
                                <li><a href="element-banner-effect.html">افکت بروی بنر</a></li>
                                <li><a href="element-banner.html">بنر</a></li>
                                <li><a href="element-blog-posts.html">پست وبلاگ</a></li>
                                <li><a href="element-breadcrumb.html"> منو پیمایشی ( بردکرامب )</a></li>
                                <li><a href="element-buttons.html">دکمه ها</a></li>
                                <li><a href="element-cta.html">ترغیب به اقدام ( کال تو اکشن )</a></li>
                                <li><a href="element-countdown.html">شمارش معکوس</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">المان ها 2</a>
                            <ul>
                                <li><a href="element-counter.html">شمارنده </a></li>
                                <li><a href="element-creative-grid.html">گرید خلاقانه</a></li>
                                <li><a href="element-animation.html">افکت ورود متن</a></li>
                                <li><a href="element-floating.html">المنت های شناور</a></li>
                                <li><a href="element-hotspot.html">تعاملی ( هات اسپات )</a></li>
                                <li><a href="element-icon-boxes.html">جعبه های آیکن</a></li>
                                <li><a href="element-icons.html">آیکن ها</a></li>
                                <li><a href="element-image-box.html">جعبه عکس</a></li>
                                <li><a href="element-instagrams.html">اینستاگرام</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">المان ها 3</a>
                            <ul>
                                <li><a href="element-categories.html">دسته بندی محصولات</a></li>
                                <li><a href="element-products.html">محصولات</a></li>
                                <li><a href="element-product-banner.html">محصولاب با بنر</a></li>
                                <li><a href="element-product-grid.html">محصولات با گرید</a></li>
                                <li><a href="element-product-single.html">تک محصوله</a></li>
                                <li><a href="element-product-tab.html">محصولات با تب</a></li>
                                <li><a href="element-single-product.html">تک محصوله </a></li>
                                <li><a href="element-slider.html">اسلایدر</a></li>
                                <li><a href="element-social-link.html">آیکن سوشیال</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">المان ها 4</a>
                            <ul>
                                <li><a href="element-subcategory.html">زیر شاخه</a></li>
                                <li><a href="element-svg-floating.html">Svg شناور</a></li>
                                <li><a href="element-tabs.html">تب ها</a></li>
                                <li><a href="element-testimonials.html">نظرات مشتریان</a></li>
                                <li><a href="element-titles.html">عنوان ها</a></li>
                                <li><a href="element-typography.html">آرایش حروف و کاراکترها( تایپوگرافی )</a></li>
                                <li><a href="element-vendor.html">فروشنده ( وندور )</a></li>
                                <li>
                                    <a href="element-video.html">ویدئو</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">خرید تمپلیت </a></li>
            </ul>
            <!-- End of MobileMenu -->
        </div>
    </div>
	<!-- Plugins JS File -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/parallax/parallax.min.js"></script>
    <script src="/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="/js/main.min.js"></script>
</body>
</html>