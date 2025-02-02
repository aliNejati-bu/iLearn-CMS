@extends('layouts.panel')

@section('title', 'افزودن پست')

@section('main')
    <h3 class="text-center mt-3">افزودن پست</h3>

    <x-panel-error-summary />

    <form action="{{ route('management.articles.store') }}" method="post" id="form" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="simpleinput" class="form-label">عنوان</label>
            <input type="text" id="simpleinput" class="form-control" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">متن</label>
            <div id="snow-editor" style="height: 300px;">{!! old('body') !!}</div>
            <input type="hidden" name="body" id="editorInput" value="{{ old('body') }}">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">برچسب</label>
            <input type="text" id="tagify" class="form-control" name="tags" value="{{ old('tags') }}" required>
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">عکس</label>
            <input type="file" id="simpleinput" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">دسته بندی</label>
            <select name="category" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success w-100">افزودن</button>
    </form>
    <script src="/panel/assets/js/pages/form-quilljs.js"></script>
    <script>
        $('#form').on('submit', function() {
            $('#editorInput').val(quill.getSemanticHTML());
        });
    </script>
    <script>
        var inputElem = document.querySelector('#tagify');
        var tagify = new Tagify(inputElem);
    </script>
@endsection
