@extends('layouts.panel')

@section('title', 'افزودن دسته بندی')

@section('main')
    <h3 class="text-center mt-3">افزودن دسته بندی</h3>

    <x-panel-error-summary />

    <form action="{{ route('management.categories.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="simpleinput" class="form-label">نام</label>
            <input type="text" id="simpleinput" class="form-control" name="name">
        </div>
        <button class="btn btn-success w-100">افزودن</button>
    </form>
@endsection
