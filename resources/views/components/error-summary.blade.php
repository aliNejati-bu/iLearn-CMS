@if ($errors->any())
    <div class="mb-4 w-100">
        <div class="alert alert-danger alert-summary alert-light alert-message alert-inline">
            <i class="fas fa-exclamation-triangle"></i>
            <h4 class="alert-title">خطا!</h4>تغییرات را اعمال کنید و دوباره سعی کنید .

            <ul style="width: 100%;">
                @foreach ($errors->all() as $error)
                    <li style="width: 100%;">{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn btn-link btn-close">
                <i class="d-icon-times"></i>
            </button>
        </div>
    </div>
@endif
