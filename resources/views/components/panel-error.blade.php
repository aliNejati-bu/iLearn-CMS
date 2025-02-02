@if (session()->has('error'))
    <div class="alert alert-danger alert-icon mb-2" role="alert">
        <div class="d-flex align-items-center">
            <div
                class="avatar-sm rounded bg-danger d-flex justify-content-center align-items-center fs-18 ms-2 flex-shrink-0">
                <i class="bx bx-info-circle text-white"></i>
            </div>
            <div class="flex-grow-1">
                {{ session()->get('error') }}
            </div>
        </div>
    </div>
@endif
