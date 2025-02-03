@extends('dashboard.layouts.app')

@section('body')
    <div class="card">
        <div class="card-body">
            <form data-form-create-admin>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Username">
                    <div class="form-text text-danger p fw-normal" data-error data-error-name></div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                    <div class="form-text text-danger p fw-normal" data-error data-error-email></div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                    <div class="form-text text-danger p fw-normal" data-error data-error-password></div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation"
                        placeholder="Enter Your Confirm Password">
                    <div class="form-text text-danger p fw-normal" data-error data-error-password-confirmation></div>
                </div>

                <div class="mb-3">
                    <div class="form-label">Role Admin</div>
                    <select name="role" class="form-select">
                        <option value="super_admin">Super Admin</option>
                        <option value="admin">Admin</option>
                    </select>
                    <div class="form-text text-danger p fw-normal" data-error data-error-role></div>
                </div>

                <button type="submit" class="btn btn-success">Add Admin</button>
            </form>
        </div>
    </div>

    <div data-success-create-admin></div>
@endsection

@push('scripts_dashboard')
    <script>
        document.querySelector("[data-form-create-admin]").addEventListener("submit", async (e) => {
            e.preventDefault();

            let formData = new FormData(e.target);

            let response = await fetch("{{ route('admin.store') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").getAttribute(
                        "content"),
                },
                body: formData
            });

            let data = await response.json();

            console.log(data)

            document.querySelectorAll("[data-error]").forEach((ele) => {
                ele.innerHTML = "";
            });

            if (data.success === true) {
                document.querySelector("[data-success-create-admin]").innerHTML = `
                    <div class="alert alert-success mt-3">
                        <div class="d-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon alert-icon icon-2">
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </div>
                            <div>${ data.message }</div>
                        </div>
                    </div>
                `;

                setTimeout(() => {
                    window.location.href = "{{ route('dashboard') }}";
                }, 500);
            } else {
                document.querySelector("[data-error-name]").innerHTML = data.errors.name[0];
                document.querySelector("[data-error-email]").innerHTML = data.errors.email[0];
                document.querySelector("[data-error-password]").innerHTML = data.errors.password[0];
                document.querySelector("[data-error-password-confirmation]").innerHTML = data.errors.password[0];
                document.querySelector("[data-error-role]").innerHTML = data.errors.role[0];
            };
        });
    </script>
@endpush
