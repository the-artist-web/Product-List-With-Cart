@extends("layouts.guest")

@section("title") Product List With Cart | Register @endsection

@section("body")
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <form class="bg-second-bg-color w-100 max-w-460px p-25 rounded-4" data-form-register data-aos="fade-up" data-aos-duration="2000">
            <a href="{{ route("index") }}" class="d-flex align-items-center justify-content-center gap-1 mb-10 title-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                    stroke="#eb9a99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                </svg>
    
                Shopping
            </a>

            <div class="mb-15">
                <div class="input-group">
                    <span class="input-group-text">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                    </span>
    
                    <input 
                        type="text"
                        placeholder="Full Name"
                        name="name"
                        class="form-control rounded-start-0 ps-0"
                    />
                </div>
                <div class="form-text text-error-color" data-error data-error-name></div>
            </div>

            <div class="mb-15">
                <div class="input-group">
                    <span class="input-group-text">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                    </span>
    
                    <input 
                        type="email"
                        placeholder="Email Address"
                        name="email"
                        class="form-control rounded-start-0 ps-0"
                    />
                </div>
                <div class="form-text text-error-color" data-error data-error-email></div>
            </div>

            <div class="mb-15">
                <div class="input-group">
                    <span class="input-group-text">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-lock-password"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" /><path d="M8 11v-4a4 4 0 1 1 8 0v4" /><path d="M15 16h.01" /><path d="M12.01 16h.01" /><path d="M9.02 16h.01" /></svg>
                    </span>

                    <input 
                        type="password"
                        placeholder="Password"
                        name="password"
                        class="form-control rounded-start-0 ps-0"
                    />
                </div>
                <div class="form-text text-error-color" data-error data-error-password></div>
            </div>

            <div class="mb-24">
                <div class="input-group">
                    <span class="input-group-text">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shield"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" /></svg>
                    </span>

                    <input 
                        type="password"
                        placeholder="Confirm Password"
                        name="password_confirmation"
                        class="form-control rounded-start-0 ps-0"
                    />
                </div>
                <div class="form-text text-error-color" data-error data-error-confirm-password></div>
            </div>

            <button type="submit" class="btn btn-primary text-uppercase mb-24 w-100">
                create acount
            </button>

            <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 text-second-color label-small">
                Already have an account? <a href="{{ route("auth.login") }}" class="btn-link">Sign In!</a>
            </div>
        </form>
    </div>
@endsection

@push("scripts")
    <script>
        document.querySelector("[data-form-register]").addEventListener("submit", async function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            let response = await fetch("/register", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").getAttribute("content"),
                },
                body: formData
            });

            let data = await response.json();

            document.querySelectorAll("[data-error]").forEach((ele) => ele.innerHTML = "" );

            if (data.success === true) {
                window.location.href = "{{ route('index') }}";
            } else {
                if (data.errors.name) document.querySelector("[data-error-name]").innerHTML = data.errors.name[0];

                if (data.errors.email) document.querySelector("[data-error-email]").innerHTML = data.errors.email[0];

                if (data.errors.password) { 
                    document.querySelector("[data-error-password]").innerHTML = data.errors.password[0]; 
                    document.querySelector("[data-error-confirm-password]").innerHTML = data.errors.password[0];
                };
            };
        });
    </script>
@endpush