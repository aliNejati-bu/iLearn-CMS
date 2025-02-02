@extends('layouts.panel')

@section('title', 'ویرایش دسته بندی')

@section('main')
    <h3 class="text-center mt-3">ویرایش دسته بندی {{ $category->name }}</h3>

    <x-panel-error-summary />

    <form action="{{ route('management.categories.update', $category->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="simpleinput" class="form-label">نام</label>
            <input type="text" id="simpleinput" class="form-control" name="name" value="{{ $category->name }}">
        </div>
        <button class="btn btn-primary w-100">ویرایش</button>
    </form>
@endsection
