@extends('layouts.master')

@section('title', 'مقاله ' . $article->title)

@section('main')
    <div class="page-content with-sidebar">
        <div class="container">
            <div class="row gutter-lg">
                <div class="col-lg">
                    <article class="post-single">
                        <figure class="post-media" style="height: 50rem;">
                            <a>
                                <img src="{{ '/storage/' . $article->image }}" style="height: 100%; object-fit: cover;" />
                            </a>
                        </figure>
                        <div class="post-details rtl">
                            <div class="post-meta">
                                نویسنده: <a href="#" class="post-author">{{ $article->user->name }}</a>
                                تاریخ انتشار: <a href="#"
                                    class="post-date">{{ $article->created_at->diffForHumans() }}</a>
                                | <a href="#" class="post-comment"><span>{{ $article->comments->count() }}</span>
                                    دیدگاه</a>
                            </div>
                            <h4 class="post-title">
                                <a href="#">
                                    {{ $article->title }}
                                </a>
                            </h4>
                            <div class="post-body mb-7"
                                style="max-width: 100%; word-wrap: break-word; word-break: break-word;">
                                <p class="mb-5" style="width: 100px;">
                                    {!! $article->body !!}
                                </p>
                            </div>
                            <div class="post-author-detail">
                                <figure class="author-media">
                                    <a href="#">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/2048px-User-avatar.svg.png"
                                            alt="avatar" width="50" height="50">
                                    </a>
                                </figure>
                                <div class="author-body">
                                    <div class="author-header d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="author-title">نویسنده:</span>
                                            <h4 class="author-name font-weight-bold mb-0">{{ $article->user->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Author Detail -->
                            <div class="post-footer mt-7 mb-3">
                                <div class="post-tags">
                                    @foreach ($article->tags_in_array as $tag)
                                        <a href="#" class="tag">{{ $tag }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </article>

                    <div class="comments">
                        <h3 class="title title-simple text-right text-normal font-weight-bold">{{ $article->comments->where('status', 'verified')->count() }} دیدگاه</h3>
                        <ul>
                            @foreach ($article->comments->where('status', 'verified') as $comment)
                                <li>
                                    <div class="comment">
                                        <figure class="comment-media">
                                            <a href="#">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/2048px-User-avatar.svg.png"
                                                    alt="avatar">
                                            </a>
                                        </figure>
                                        <div class="comment-body rtl text-right">
                                            <div class="comment-user">
                                                <span
                                                    class="comment-date">{{ $comment->created_at->diffForHumans() }}</span>
                                                <h4><a href="#">{{ $comment->user->name }}</a></h4>
                                            </div>
                                            <div class="comment-content mb-2">
                                                <p>
                                                    {{ $comment->body }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Comment  -->
                    <div class="reply rtl text-right">
                        <x-error-summary />
                        <div class="title-wrappe">
                            <h3 class="title title-simple text-right text-normal">دیدگاه خود را بنویسید</h3>
                        </div>
                        <form action="{{ route('comments.store', $article->id) }}" method="post">
                            @csrf
                            <textarea id="reply-message" name="body" rows="8" class="form-control mb-4" placeholder="دیدگاه شما" required></textarea>
                            <button type="submit" class="btn btn-primary btn-rounded">
                                ثبت دیدگاه <i class="d-icon-arrow-left"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
