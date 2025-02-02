@if ($errors->any())
    <div class="mb-3">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-icon mb-2" role="alert">
                <div class="d-flex align-items-center">
                    <div
                        class="avatar-sm rounded bg-danger d-flex justify-content-center align-items-center fs-18 ms-2 flex-shrink-0">
                        <i class="bx bx-info-circle text-white"></i>
                    </div>
                    <div class="flex-grow-1">
                        {{ $error }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
