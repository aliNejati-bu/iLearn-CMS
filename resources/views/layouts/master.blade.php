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
            google: {
                families: ['vazir:300,400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
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
    <link rel="stylesheet" type="text/css" href="/vendor/codemirror/codemirror.css">
    <!-- Font Vazir -->
    <link href="/fonts/vazir/font-vazir.css" rel="stylesheet" />
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="/css/demo1.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.min.css">
</head>

<body class="home">
    <div class="page-wrapper">
        <x-header />
        <!-- End Header -->
        <main class="main rtl text-right">
            @yield('main')
        </main>
        <!-- End of Main -->
        <x-footer></x-footer>
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->
    <x-sticky-footer />
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i
            class="d-icon-arrow-up"></i></a>
    <!-- MobileMenu -->
    <x-mobile-menu />
    <!-- Plugins JS File -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/parallax/parallax.min.js"></script>
    <script src="/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="/js/main.min.js"></script>
    {{-- Swal --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session()->has('fail'))
        <script>
            Swal.fire({
                title: 'ناموفق',
                text: 'عملیات ناموفق بود',
                icon: 'error',
                confirmButtonText: 'باشه'
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            Swal.fire({
                title: 'ناموفق',
                text: 'عملیات ناموفق بود',
                icon: 'error',
                confirmButtonText: 'باشه'
            });
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: 'موفق',
                text: 'عملیات با موفقیت انجام شد',
                icon: 'success',
                confirmButtonText: 'باشه'
            });
        </script>
    @endif
</body>

</html>
