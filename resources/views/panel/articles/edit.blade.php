@extends('layouts.panel')

@section('title', 'ویرایش کاربر')

@section('main')
    <h3 class="text-center mt-3">ویرایش کاربر {{ $user->name }}</h3>

    <x-panel-error-summary />

    <form action="{{ route('management.users.update', $user->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="simpleinput" class="form-label">نام</label>
            <input type="text" id="simpleinput" class="form-control" name="first_name" value="{{ $user->first_name }}">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">نام خانوادگی</label>
            <input type="text" id="simpleinput" class="form-control" name="last_name" value="{{ $user->last_name }}">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">ایمیل</label>
            <input type="email" id="simpleinput" class="form-control" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">رمزعبور (خالی بگذارید تا بدون تغییر بماند)</label>
            <input type="password" id="simpleinput" name="new_password" class="form-control">
        </div>
        <button class="btn btn-primary w-100">ویرایش</button>
    </form>
@endsection
