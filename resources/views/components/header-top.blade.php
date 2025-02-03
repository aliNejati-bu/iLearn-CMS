<div class="header-middle sticky-header fix-top sticky-content  ">
    <div class="container">
        <div class="header-right">
            <a href="#" class="mobile-menu-toggle">
                <i class="d-icon-bars2"></i>
            </a>
            <a href="{{ route('home') }}" class="logo">
                <img src="/images/ilearn.png" alt="logo" width="153" height="44" />
            </a>
            <!-- End Logo -->
            <div class="header-search hs-simple">
                <form action="#" class="input-wrapper">
                    <input type="text" class="form-control" name="search" autocomplete="off" placeholder="جستجو ..."
                        required />
                    <button class="btn btn-search" type="submit" title="submit-button">
                        <i class="d-icon-search"></i>
                    </button>
                </form>
            </div>
            <!-- End Header Search -->
        </div>
        <div class="header-left">
            <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2">
                @auth
                    @canany(['is_admin', 'is_author'])
                        <a href="#" class="cart-toggle"
                            onclick="return document.location.href = '{{ route('management.index') }}';">
                            <div class="m-3 cart-label d-lg-show">
                                <span class="cart-price">پنل مدیریت</span>
                            </div>
                            <i class="d-icon-user"></i>
                        </a>
                    @else
                        <a href="#" class="cart-toggle"
                            onclick="return document.location.href = '{{ route('dashboard') }}';">
                            <div class="m-3 cart-label d-lg-show">
                                <span class="cart-price">پنل کاربری</span>
                            </div>
                            <i class="d-icon-user"></i>
                        </a>
                    @endcan
                @endauth
                @guest
                    <a href="#signin" class="cart-toggle login-toggle link-to-tab">
                        <div class="cart-label d-lg-show">
                            <span class="cart-price">ورود | ثبت نام</span>
                        </div>
                        <i class="d-icon-user" id="#signin"></i>
                    </a>
                @endguest
                <!-- End Dropdown Box -->
            </div>
        </div>
    </div>
</div>
