<div class="app-sidebar">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="index-2.html" class="logo-dark">
            <img src="/images/ilearn.png" class="logo-sm" alt="logo sm">
            <img src="/images/ilearn.png" class="logo-lg" alt="logo dark">
        </a>

        <a href="index-2.html" class="logo-light">
            <img src="/images/ilearn.png" class="logo-sm" alt="logo sm">
            <img src="/images/ilearn.png" class="logo-lg" alt="logo light">
        </a>
    </div>

    <div class="scrollbar" data-simplebar>

        <ul class="navbar-nav" id="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('management.index') }}">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:widget-2-outline"></iconify-icon>
                    </span>
                    <span class="nav-text"> داشبورد </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarUsers" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarUsers">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:user-linear"></iconify-icon>
                    </span>
                    <span class="nav-text">کاربران</span>
                </a>
                <div class="collapse" id="sidebarUsers">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('management.users.index') }}">لیست کاربران</a>
                            <a class="sub-nav-link" href="{{ route('management.users.create') }}">افزودن کاربر</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarArticles" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarArticles">
                    <span class="nav-icon">
                        <iconify-icon icon="ri:blogger-line"></iconify-icon>
                    </span>
                    <span class="nav-text">وبلاگ</span>
                </a>
                <div class="collapse" id="sidebarArticles">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('management.articles.index') }}">لیست پست ها</a>
                            <a class="sub-nav-link" href="{{ route('management.articles.create') }}">افزودن پست</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarCategories" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarCategories">
                    <span class="nav-icon">
                        <iconify-icon icon="lucide:tag"></iconify-icon>
                    </span>
                    <span class="nav-text">دسته بندی</span>
                </a>
                <div class="collapse" id="sidebarCategories">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('management.categories.index') }}">لیست دسته بندی ها</a>
                            <a class="sub-nav-link" href="{{ route('management.categories.create') }}">افزودن دسته بندی</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarMaps">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:map-outline"></iconify-icon>
                    </span>
                    <span class="nav-text"> نقشه ها</span>
                </a>
                <div class="collapse" id="sidebarMaps">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="maps-google.html">نقشه گوگل</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="maps-vector.html">نقشه برداری</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
