<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay">
    </div>
    <!-- End of Overlay -->
    <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
    <!-- End of CloseButton -->
    <div class="mobile-menu-container scrollable">
        <form action="{{ route('articles.index') }}" class="input-wrapper">
            <input type="text" class="form-control" name="q" autocomplete="off" placeholder="جستجو ..." value="{{ request()->get('q') }}"
                required />
            <button class="btn btn-search" type="submit" title="submit-button">
                <i class="d-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <ul class="mobile-menu mmenu-anim">
            <li>
                <a href="{{ route('home') }}">صفحه اصلی</a>
            </li>
            <li>
                <a href="{{ route('articles.index') }}">مقالات</a>
            </li>
        </ul>
        <!-- End of MobileMenu -->
    </div>
</div>
