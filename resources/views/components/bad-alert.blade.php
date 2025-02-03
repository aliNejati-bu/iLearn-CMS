@if (session()->has('bad'))
    <div class="mb-4 mt-4" style="padding: 6px;">
        <div class="alert alert-danger alert-dark alert-round alert-inline">
            {{ session()->get('bad') }}
            <button type="button" class="btn btn-link btn-close">
                <i class="d-icon-times"></i>
            </button>
        </div>
    </div>
@endif
