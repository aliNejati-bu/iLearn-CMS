<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#ffffff">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/ilearn.png">

    <!-- Font Family link -->
    <link rel="stylesheet" href="/panel/assets/fonts/Dana/stylesheet.css">

    <!-- Vendor css -->
    <link href="/panel/assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="/panel/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="/panel/assets/css/style.min.css" rel="stylesheet" type="text/css" />

    <!-- Gridjs Plugin css -->
    <link href="/panel/assets/vendor/gridjs/theme/mermaid.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config js -->
    <script src="/panel/assets/js/config.js"></script>

    <!-- Gridjs Plugin js -->
    <script src="/panel/assets/vendor/gridjs/gridjs.umd.js"></script>

    <!-- Quill Editor js -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <!-- JQuery js -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Tagify js css -->
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- START Wrapper -->
    <div class="app-wrapper scroll-container">

        <!-- Topbar Start -->
        <x-panel-top-bar />
        <!-- Topbar End -->

        <!-- App Menu Start -->
        <x-panel-side-bar />
        <!-- App Menu End -->

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">
            <x-panel-error />

            @yield('main')

            <x-panel-footer />
        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->

    </div>
    <!-- END Wrapper -->

    <!-- Vendor Javascript -->
    <script src="/panel/assets/js/vendor.min.js"></script>

    <!-- App Javascript -->
    <script src="/panel/assets/js/app.js"></script>

    <!-- Vector Map Js -->
    <script src="/panel/assets/vendor/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="/panel/assets/vendor/jsvectormap/maps/world-merc.js"></script>
    <script src="/panel/assets/vendor/jsvectormap/maps/world.js"></script>

    <!-- Dashboard Js -->
    <script src="/panel/assets/js/pages/dashboard.js"></script>

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
