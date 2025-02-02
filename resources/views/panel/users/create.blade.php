@extends('layouts.panel')

@section('title', 'افزودن کاربر')

@section('main')
    <h3 class="text-center mt-3">افزودن کاربر</h3>

    <x-panel-error-summary />

    <form action="{{ route('management.users.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="simpleinput" class="form-label">نام</label>
            <input type="text" id="simpleinput" class="form-control" name="first_name">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">نام خانوادگی</label>
            <input type="text" id="simpleinput" class="form-control" name="last_name">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">ایمیل</label>
            <input type="email" id="simpleinput" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">رمزعبور</label>
            <input type="password" id="simpleinput" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">تایید رمزعبور</label>
            <input type="password" id="simpleinput" name="password_confirmation" class="form-control">
        </div>
        <button class="btn btn-success w-100">افزودن</button>
    </form>
@endsection
