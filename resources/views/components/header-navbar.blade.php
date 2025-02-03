<div class="header-bottom d-lg-show ">
    <div class="container">
        <div class="header-right">
            <nav class="main-nav">
                <ul class="menu">
                    <li class="{{ (Route::is('home')) ? 'active' : '' }}">
                        <a href="{{ route('home') }}">صفحه اصلی</a>
                    </li>
                    <li class="{{ Route::is('articles.index') ? 'active' : '' }}">
                        <a href="{{ route('articles.index') }}">مقالات</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
