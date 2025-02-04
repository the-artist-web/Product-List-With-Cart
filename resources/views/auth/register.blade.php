@extends("layouts.guest")

@section("title") Product List With Cart | Register @endsection

@section("body")
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <form action="{{ route('auth.register.post') }}" method="POST" class="bg-second-bg-color w-100 max-w-460px p-25 rounded-4" data-aos="fade-up" data-aos-duration="2000">
            @csrf

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
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-password-fingerprint"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 8c.788 1 1 2 1 3v1" /><path d="M9 11c0 -1.578 1.343 -3 3 -3s3 1.422 3 3v2" /><path d="M12 11v2" /><path d="M6 12v-1.397c-.006 -1.999 1.136 -3.849 2.993 -4.85a6.385 6.385 0 0 1 6.007 -.005" /><path d="M12 17v4" /><path d="M10 20l4 -2" /><path d="M10 18l4 2" /><path d="M5 17v4" /><path d="M3 20l4 -2" /><path d="M3 18l4 2" /><path d="M19 17v4" /><path d="M17 20l4 -2" /><path d="M17 18l4 2" /></svg>
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