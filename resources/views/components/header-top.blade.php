<div class="header-middle sticky-header fix-top sticky-content  ">
    <div class="container">
        <div class="header-right">
            <a href="#" class="mobile-menu-toggle">
                <i class="d-icon-bars2"></i>
            </a>
            <a href="demo1.html" class="logo">
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
                <a href="#" class="cart-toggle" onclick="return document.location.href = '/logout';">
                    @auth
                        <div class="cart-label d-lg-show">
                            <span class="cart-price">خروج</span>
                        </div>
                        <i class="d-icon-user"></i>
                    @endauth
                </a>
                <a href="#signin" class="cart-toggle login-toggle link-to-tab">
                    @guest
                        <div class="cart-label d-lg-show">
                            <span class="cart-price">ورود | ثبت نام</span>
                        </div>
                        <i class="d-icon-user" id="#signin"></i>
                    @endguest
                </a>
                <!-- End Dropdown Box -->
            </div>
        </div>
    </div>
</div>
