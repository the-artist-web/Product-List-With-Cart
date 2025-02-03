@extends('dashboard.layouts.guest')

@section('body')
    <div class="page d-flex align-items-center justify-content-center">
        <div class="container container-tight py-4">
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login to your account</h2>
                    <form data-form-login>
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                            <div class="form-text text-danger p fw-normal" data-error data-error-email></div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <div class="form-text text-danger p fw-normal" data-error data-error-password></div>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("scripts_dashboard")
    <script>
        document.querySelector("[data-form-login]").addEventListener("submit", async (e) => {
            e.preventDefault();

            let formData = new FormData(e.target);

            let response = await fetch("{{ route('auth.admin.login.post') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").getAttribute("content"),
                },
                body: formData
            });

            let data = await response.json();

            document.querySelectorAll("[data-error]").forEach((ele) => { ele.innerHTML = ""; });

            if (data.success === true) {
                window.location.href = "{{ route('dashboard') }}";
            } else {
                document.querySelector("[data-error-email]").innerHTML = data.errors.email[0];
                document.querySelector("[data-error-password]").innerHTML = data.errors.password[0];
            };
        });
    </script>
@endpush