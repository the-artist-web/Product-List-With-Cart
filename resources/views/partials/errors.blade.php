@if ($errors->any())
    <div class="d-grid gap-2 position-fixed" style="right: 20px; bottom: 20px;">
        @foreach ($errors->all() as $error)
            <div class="alert alert-important alert-danger bg-error-color border-0 alert-dismissible m-0 rounded-3 py-10 label-small">{{ $error }}</div>
        @endforeach
    </div>
@endif