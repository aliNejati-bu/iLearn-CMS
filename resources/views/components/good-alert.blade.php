@if (session()->has('good'))
    <div class="mb-4 mt-4" style="padding: 6px;">
        <div class="alert alert-success alert-dark alert-round alert-inline">
            {{ session()->get('good') }}
            <button type="button" class="btn btn-link btn-close">
                <i class="d-icon-times"></i>
            </button>
        </div>
    </div>
@endif
