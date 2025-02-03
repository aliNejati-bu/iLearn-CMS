@if ($paginator->hasPages())
    <ul class="pagination pt-4 rtl">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link page-link-prev" aria-label="Previous" tabindex="-1" aria-disabled="true">
                    <i class="d-icon-arrow-right"></i>قبلی
                </a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link page-link-prev" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"
                    tabindex="-1" aria-disabled="true">
                    <i class="d-icon-arrow-right"></i>قبلی
                </a>
            </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled" aria-current="page">
                    <a class="page-link" href="#">1</a>
                </li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link page-link-next" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    بعدی<i class="d-icon-arrow-left"></i> 
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link page-link-next" aria-label="Next">
                    بعدی<i class="d-icon-arrow-left"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
