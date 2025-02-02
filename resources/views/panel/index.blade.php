@extends('layouts.panel')

@section('title', 'پنل مدیریت')

@section('main')
    <!-- Start Container Fluid -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fs-32 text-primary avatar-title"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M8 15h8M8 9h4m7 0q-1 0-1-1a6 6 0 0 0-6-6H8a6 6 0 0 0-6 6v8a6 6 0 0 0 6 6h8a6 6 0 0 0 6-6v-5a2 2 0 0 0-2-2Z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-6 text-start">
                                <p class="text-muted mb-0 text-truncate">مطالب</p>
                                <h3 class="text-dark mt-2 mb-0">{{ App\Models\Article::all()->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fs-32 text-primary avatar-title"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                                            <circle cx="12" cy="6" r="4" />
                                            <path
                                                d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-6 text-start">
                                <p class="text-muted mb-0 text-truncate">کاربران</p>
                                <h3 class="text-dark mt-2 mb-0">{{ App\Models\User::all()->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" class="fs-32 text-primary avatar-title">
                                        <path fill="currentColor"
                                            d="M6 14h12v-2H6zm0-3h12V9H6zm0-3h12V6H6zm16 14l-4-4H4q-.825 0-1.412-.587T2 16V4q0-.825.588-1.412T4 2h16q.825 0 1.413.588T22 4zM4 16h14.85L20 17.125V4H4zm0 0V4z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-6 text-start">
                                <p class="text-muted mb-0 text-truncate">کامنت</p>
                                <h3 class="text-dark mt-2 mb-0">{{ App\Models\Comment::all()->count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">کاربران جدید</h4>

                            <a href="{{ route('management.users.create') }}" class="btn btn-sm btn-primary">
                                <i class="bx bx-plus ms-1"></i>افزودن کاربر جدید
                            </a>
                        </div>
                    </div> <!-- end card body -->

                    <div class="table-responsive table-centered">
                        <table class="table mb-0">
                            <tr>
                                <th class="border-0 py-2">شناسه</th>
                                <th class="border-0 py-2">نام</th>
                                <th class="border-0 py-2">ایمیل</th>
                                <th class="border-0 py-2">عضویت</th>
                            </tr>
                            <tbody>
                                @foreach (App\Models\User::all() as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            <span class="align-middle ms-1">{{ $user->name }}</span>
                                        </td>
                                        <td dir="ltr">{{ $user->email }}</td>
                                        <td>
                                            <span class="badge badge-soft-success">{{ $user->created_at->diffForHumans() }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- table responsive -->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">سفارشات اخیر</h4>

                            <a href="#!" class="btn btn-sm btn-primary">
                                <i class="bx bx-plus ms-1"></i>ایجاد سفارش
                            </a>
                        </div>
                    </div> <!-- end card body -->
                    <div class="table-responsive table-centered">
                        <table class="table mb-0">
                            <thead class="bg-light bg-opacity-50">
                                <tr>
                                    <th class="border-0 py-2">شناسه سفارش</th>
                                    <th class="border-0 py-2">تاریخ</th>
                                    <th class="border-0 py-2">نام مشتری</th>
                                    <th class="border-0 py-2">شماره تلفن</th>
                                    <th class="border-0 py-2">آدرس</th>
                                    <th class="border-0 py-2">نوع پرداخت</th>
                                    <th class="border-0 py-2">وضعیت</th>
                                </tr>
                            </thead> <!-- end thead-->
                            <tbody>
                                <tr>
                                    <td><a href="#!">#TZ5625</a></td>
                                    <td>25 آذر 1403</td>
                                    <td><a href="#!">محمد جواد طبری</a></td>
                                    <td>0912345678</td>
                                    <td>آمل،خیابان هراز،آفتاب 18</td>
                                    <td>کارت اعتباری</td>
                                    <td><i class="bx bxs-circle text-success ms-1"></i>تکمیل شد</td>
                                </tr>
                                <tr>
                                    <td><a href="#!">#TZ9652</a></td>
                                    <td>20 آذر 1403</td>
                                    <td><a href="#!">رضا رضازاده</a></td>
                                    <td>09987654321</td>
                                    <td>آمل،خیابان هراز،آفتاب 18</td>
                                    <td>کارت اعتباری</td>
                                    <td><i class="bx bxs-circle text-success ms-1"></i>تکمیل شد</td>
                                </tr>
                                <tr>
                                    <td><a href="#!">#TZ5984</a></td>
                                    <td>20 آذر 1403</td>
                                    <td><a href="#!">سارا حسینی</a></td>
                                    <td>09543219876</td>
                                    <td>آمل،خیابان هراز،آفتاب 18</td>
                                    <td>Pay Pal</td>
                                    <td><i class="bx bxs-circle text-success ms-1"></i>تکمیل شد</td>
                                </tr>
                                <tr>
                                    <td><a href="#!">#TZ3625</a></td>
                                    <td>5 آبان 1403</td>
                                    <td><a href="#!">جواد رجبی</a></td>
                                    <td>09567891234</td>
                                    <td>آمل،خیابان هراز،آفتاب 18</td>
                                    <td>Pay Pal</td>
                                    <td><i class="bx bxs-circle text-primary ms-1"></i>در حال پردازش
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#!">#TZ8652</a></td>
                                    <td>2 مهر 1403</td>
                                    <td><a href="#!">علی اکبر نبی زاده</a></td>
                                    <td>09929982850</td>
                                    <td>آمل،خیابان هراز،آفتاب 18</td>
                                    <td>کارت اعتباری</td>
                                    <td><i class="bx bxs-circle text-primary ms-1"></i>در حال پردازش
                                    </td>
                                </tr>
                            </tbody> <!-- end tbody -->
                        </table> <!-- end table -->
                    </div> <!-- table responsive -->
                    <div
                        class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top">
                        <div class="col-sm">
                            <div class="text-muted">
                                نمایش <span class="fw-semibold">5</span> از <span class="fw-semibold">90521</span> سفارشات
                            </div>
                        </div>
                        <div class="col-sm-auto mt-3 mt-sm-0">
                            <ul class="pagination pagination-rounded m-0">
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class='bx bx-right-arrow-alt'></i></a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class='bx bx-left-arrow-alt'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
