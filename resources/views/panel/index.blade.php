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
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" class="fs-32 text-primary avatar-title">
                                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                                            <path
                                                d="M4.728 16.137c-1.545-1.546-2.318-2.318-2.605-3.321c-.288-1.003-.042-2.068.45-4.197l.283-1.228c.413-1.792.62-2.688 1.233-3.302s1.51-.82 3.302-1.233l1.228-.284c2.13-.491 3.194-.737 4.197-.45c1.003.288 1.775 1.061 3.32 2.606l1.83 1.83C20.657 9.248 22 10.592 22 12.262c0 1.671-1.344 3.015-4.033 5.704c-2.69 2.69-4.034 4.034-5.705 4.034c-1.67 0-3.015-1.344-5.704-4.033z" />
                                            <circle cx="8.607" cy="8.879" r="2"
                                                transform="rotate(-45 8.607 8.879)" />
                                            <path stroke-linecap="round" d="m11.542 18.5l6.979-6.98" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-6 text-start">
                                <p class="text-muted mb-0 text-truncate">دسته بندی</p>
                                <h3 class="text-dark mt-2 mb-0">{{ App\Models\Category::all()->count() }}</h3>
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
                                @foreach (App\Models\User::latest()->get()->take(4) as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            <span class="align-middle ms-1">{{ $user->name }}</span>
                                        </td>
                                        <td dir="ltr">{{ $user->email }}</td>
                                        <td>
                                            <span
                                                class="badge badge-soft-success">{{ $user->created_at->diffForHumans() }}</span>
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
                            <h4 class="card-title">نظرات اخیر</h4>

                            <a href="{{ route('management.comments.index') }}" class="btn btn-sm btn-primary">
                                <i class="bx ms-1"></i>مدیریت نظرات
                            </a>
                        </div>
                    </div> <!-- end card body -->
                    <div class="table-responsive table-centered">
                        <table class="table mb-0">
                            <thead class="bg-light bg-opacity-50">
                                <tr>
                                    <th class="border-0 py-2">شناسه</th>
                                    <th class="border-0 py-2">تاریخ</th>
                                    <th class="border-0 py-2">کاربر</th>
                                    <th class="border-0 py-2">مقاله</th>
                                    <th class="border-0 py-2">وضعیت</th>
                                </tr>
                            </thead> <!-- end thead-->
                            <tbody>
                                @foreach (App\Models\Comment::latest()->get()->take(4) as $comment)
                                    <tr>
                                        <td>{{ $comment->id }}</td>
                                        <td>{{ $comment->created_at->diffForHumans() }}</td>
                                        <td>{{ $comment->user->name }}</td>
                                        <td><a
                                                href="{{ route('articles.show', $comment->article->id) }}">{{ $comment->article->id }}</a>
                                        </td>
                                        <td>
                                            @if ($comment->status == 'created')
                                                <i class="bx bxs-circle text-warning ms-1"></i>در انتظار
                                            @endif
                                            @if ($comment->status == 'verified')
                                                <i class="bx bxs-circle text-success ms-1"></i>تایید شده
                                            @endif
                                            @if ($comment->status == 'rejected')
                                                <i class="bx bxs-circle text-danger ms-1"></i>رد شده
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody> <!-- end tbody -->
                        </table> <!-- end table -->
                    </div> <!-- table responsive -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
