@extends("layouts.app")

@section("title") Product List With Cart | Settings @endsection

@section("body")
    <div class="mb-20">
        <div class="container">
            <form class="bg-second-bg-color rounded-4 p-30" enctype="multipart/form-data" data-form-update-prfile>
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-30">
                    <h2 class="title-small">Basic info</h2>

                    <button type="submit" class="btn btn-primary label-small">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-transfer-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 4v16l-6 -5.5" /><path d="M14 20v-16l6 5.5" /></svg>

                        save change
                    </button>
                </div>

                <label for="profile_photo" class="img-holder position-relative border border-2 border-color d-flex align-items-center justify-content-center h-160px max-h-160px w-160px max-w-160px rounded-pill mb-16" style="cursor: pointer;">
                    @if (Auth::user()->profile_photo)
                        <img 
                            src="" 
                            alt="{{ Auth::user()->name }}"
                            loading="lazy"
                            class="img-cover position-absolute top-0 left-0 right-0 bottom-0 rounded-pill"
                        />
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none"
                            stroke="#8a8a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                    @endif

                    <input 
                        type="file" 
                        id="profile_photo"
                        name="profile_photo"
                        class="d-none"
                    />
                </label>

                <div class="row row-cols-1 row-cols-md-2 g-3 mb-16">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" /><path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" /></svg>
                            </span>
            
                            <input 
                                type="text"
                                placeholder="Name"
                                name="name"
                                class="form-control rounded-start-0 ps-0"
                            />
                        </div>
                        <div class="form-text text-error-color" data-error data-error-name></div>
                    </div>

                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                            </span>
            
                            <input 
                                type="text"
                                placeholder="Username"
                                name="username"
                                class="form-control rounded-start-0 ps-0"
                            />
                        </div>
                        <div class="form-text text-error-color" data-error data-error-username></div>
                    </div>
                </div>

                <div class="mb-16">
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

                <div class="mb-16">
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-layout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
                        </span>
        
                        <input 
                            type="email"
                            placeholder="Short Bio"
                            name="bio"
                            class="form-control rounded-start-0 ps-0"
                        />
                    </div>
                    <div class="form-text text-error-color" data-error data-error-bio></div>
                </div>
            </form>
        </div>
    </div>

    <div class="mb-20">
        <div class="container">
            <form class="bg-second-bg-color rounded-4 p-30" data-form-update-password>
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-30">
                    <h2 class="title-small">Change password</h2>

                    <button type="submit" class="btn btn-primary label-small">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-transfer-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 4v16l-6 -5.5" /><path d="M14 20v-16l6 5.5" /></svg>

                        save change
                    </button>
                </div>

                <div class="mb-16">
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-lock-password"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" /><path d="M8 11v-4a4 4 0 1 1 8 0v4" /><path d="M15 16h.01" /><path d="M12.01 16h.01" /><path d="M9.02 16h.01" /></svg>
                        </span>
        
                        <input 
                            type="password"
                            placeholder="Old New"
                            name="old_passowrd"
                            class="form-control rounded-start-0 ps-0"
                        />
                    </div>
                    <div class="form-text text-error-color" data-error data-error-old-passowrd></div>
                </div>

                <div class="mb-16">
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-password"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10v4" /><path d="M10 13l4 -2" /><path d="M10 11l4 2" /><path d="M5 10v4" /><path d="M3 13l4 -2" /><path d="M3 11l4 2" /><path d="M19 10v4" /><path d="M17 13l4 -2" /><path d="M17 11l4 2" /></svg>
                        </span>
        
                        <input 
                            type="password"
                            placeholder="New Password"
                            name="new_password"
                            class="form-control rounded-start-0 ps-0"
                        />
                    </div>
                    <div class="form-text text-error-color" data-error data-error-new-password></div>
                </div>

                <div class="mb-16">
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-password-fingerprint"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 8c.788 1 1 2 1 3v1" /><path d="M9 11c0 -1.578 1.343 -3 3 -3s3 1.422 3 3v2" /><path d="M12 11v2" /><path d="M6 12v-1.397c-.006 -1.999 1.136 -3.849 2.993 -4.85a6.385 6.385 0 0 1 6.007 -.005" /><path d="M12 17v4" /><path d="M10 20l4 -2" /><path d="M10 18l4 2" /><path d="M5 17v4" /><path d="M3 20l4 -2" /><path d="M3 18l4 2" /><path d="M19 17v4" /><path d="M17 20l4 -2" /><path d="M17 18l4 2" /></svg>
                        </span>
        
                        <input 
                            type="password"
                            placeholder="Password Confirmation"
                            name="new_password_confirmation"
                            class="form-control rounded-start-0 ps-0"
                        />
                    </div>
                    <div class="form-text text-error-color" data-error data-error-password-confirmation></div>
                </div>
            </form>
        </div>
    </div>

    <div class="mb-20">
        <div class="container">
            <form class="bg-second-bg-color rounded-4 p-30" data-form-delete-user>
                <h2 class="mb-10 text-error-color title-medium">Delete acount</h2>

                <p class="mb-16 text-second-color label-small">If you delete your account, you will never be able to recover it. All your data and information will be permanently lost. Please proceed with caution.</p>

                <button type="submit" class="btn bg-error-color label-small">
                    delete your acount
                </button>
            </form>
        </div>
    </div>
@endsection