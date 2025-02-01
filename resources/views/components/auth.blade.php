<header class="header rtl text-right">
    <div class="header-top ">
        <div class="container">
            <div class="header-right">
                <p class="welcome-msg">به وبلاگ آیلرن خوش آمدید</p>
            </div>
            <div class="header-left ">
                <div class="dropdown login-dropdown off-canvas">
                    <div class="canvas-overlay"></div>
                    <!-- End Login Toggle -->
                    <div class="dropdown-box scrollable">
                        <div class="login-popup">
                            <div class="form-box">
                                <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                    <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active border-no lh-1 ls-normal" href="#signin">ورود </a>
                                        </li>
                                        <li class="delimiter">/</li>
                                        <li class="nav-item">
                                            <a class="nav-link border-no lh-1 ls-normal" href="#register">ثبت نام</a>
                                        </li>
                                    </ul>
                                    <x-error-summary />
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="signin">
                                            <form action="{{ route('auth.login') }}" method="post">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control text-left" name="email" placeholder="ایمیل" value="{{ old('email') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control text-left ltr" name="password" placeholder="کلمه عبور" required>
                                                </div>
                                                <button class="btn btn-dark btn-block btn-rounded" type="submit">
                                                    ورود
                                                </button>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="register">
                                            <form action="{{ route('auth.register') }}" method="post">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control text-right rtl" name="first_name" placeholder="نام" value="{{ old('first_name') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control text-right rtl" name="last_name" placeholder="نام خانوداگی" value="{{ old('last_name') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control text-right rtl" name="email" placeholder="ایمیل" value="{{ old('email') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control text-right rtl" name="password" placeholder="رمزعبور" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control text-right rtl" name="password_confirmation" placeholder="تکرار رمزعبور" required>
                                                </div>
                                                <button class="btn btn-dark btn-block btn-rounded" type="submit">
                                                    ثبت نام
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button title="Close (Esc)" type="button" class="mfp-close"><span>×</span></button>
                        </div>
                    </div>
                    <!-- End Dropdown Box -->
                </div>
                <!-- End of Login -->
            </div>
        </div>
    </div>
</header>
