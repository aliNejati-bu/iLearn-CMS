@extends('layouts.master')

@section('title', 'پنل کاربری')

@section('main')
    <div class="page-content mt-4 mb-10 pb-6">
        <div class="container">
            <h2 class="title title-center mb-10">حساب کاربری</h2>
            <x-error-summary />
            <div class="tab tab-vertical gutter-lg">
                <ul class="nav nav-tabs mb-4 col-lg-3 col-md-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-right {{ ((!$errors->any()) && (session()->get('dashboard') == true || (!session()->has('dashboard')))) ? 'active' : '' }}" href="#dashboard">داشبورد</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-right {{ (session()->get('tab') == 'account') ? 'active' : '' }}" href="#account">ویرایش پروفایل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-right" href="#"
                            onclick="return document.location.href = '{{ route('logout') }}';">خروج</a>
                    </li>
                </ul>
                <div class="tab-content col-lg-9 col-md-8">
                    <div class="tab-pane {{ ((!$errors->any()) && (session()->get('dashboard') == true || (!session()->has('dashboard')))) ? 'active' : '' }}" id="dashboard">
                        <p class="mb-0">
                            سلام <span>{{ request()->user()->name }}</span> عزیز
                        </p>
                        <p class="mb-8">
                            از داشبورد حساب خود می توانید اطلاعات کاربری خود را ویرایش کنید.
                            <a href="{{ route('profile.edit') }}" class="link-to-tab text-primary">
                                ویرایش اطلاعات کاربری من
                            </a>
                        </p>
                        <a href="shop.html" class="btn btn-dark btn-rounded">
                            مشاهده مطالب <i class="d-icon-arrow-left"></i>
                        </a>
                    </div>
                    <div class="tab-pane {{ (session()->get('tab') == 'account') ? 'active' : '' }}" id="account">
                        <form action="{{ route('profile.update') }}" class="form" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>نام </label>
                                    <input type="text" class="form-control" name="first_name"
                                        value="{{ request()->user()->first_name }}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label>نام خانوادگی</label>
                                    <input type="text" class="form-control" name="last_name"
                                        value="{{ request()->user()->last_name }}" required>
                                </div>
                            </div>
                            <label>ایمیل (امکان تغییر ایمیل نیست)</label>
                            <input type="email" class="form-control text-left" value="{{ request()->user()->email }}"
                                disabled required>
                            <fieldset>
                                <legend>تغییر پسورد</legend>
                                <label>رمز عبور فعلی (خالی بگذارید تا بدون تغییر باقی بماند)</label>
                                <input type="password" class="form-control text-left ltr" name="current_password">
                                <label>رمز عبور جدید (خالی بگذارید تا بدون تغییر باقی بماند)</label>
                                <input type="password" class="form-control text-left ltr" name="new_password">
                                <label>رمز عبور جدید را تایید کنید</label>
                                <input type="password" class="form-control text-left ltr" name="new_password_confirmation">
                            </fieldset>
                            <button type="submit" class="btn btn-primary mt-2">ذخیره تغییرات</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
