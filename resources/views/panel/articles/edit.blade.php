@extends('layouts.panel')

@section('title', 'ویرایش پست')

@section('main')
    <h3 class="text-center mt-3">ویرایش پست شماره {{ $article->id }}</h3>

    <x-panel-error-summary />

    <form action="{{ route('management.articles.update', $article->id) }}" method="post" id="form" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="simpleinput" class="form-label">عنوان</label>
            <input type="text" id="simpleinput" class="form-control" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">متن</label>
            <div id="snow-editor" style="height: 300px;">{!! $article->body !!}</div>
            <input type="hidden" name="body" id="editorInput">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">برچسب</label>
            <input type="text" id="tagify" class="form-control" name="tags" required>
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">عکس</label>
            <input type="file" id="simpleinput" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">دسته بندی</label>
            <select name="category" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ ($category->id == $article->category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary w-100">ویرایش</button>
    </form>
    <script src="/panel/assets/js/pages/form-quilljs.js"></script>
    <script>
        $('#form').on('submit', function() {
            $('#editorInput').val(quill.getSemanticHTML());
        });
    </script>
    <script>
        let inputElem = document.querySelector('#tagify');
        let tagify = new Tagify(inputElem);

        let tags = '{{ $article->tags }}';

        tagify.addTags(tags.split(','))
    </script>
@endsection
