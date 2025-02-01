<nav class="navbar position-fixed top-0 left-0 right-0 z-3 bg-bg w-100 h-65px">
    <div class="container d-flex align-items-center justify-content-between gap-3">
        <a href="{{ route("index") }}" class="d-flex align-items-center gap-1 title-small">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"
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

        @if (Auth::guard("web")->check())
            <div class="d-flex align-items-center gap-3">
                <div class="dropdown">
                    <button type="button" class="img-holder position-relative border border-2 border-color d-flex align-items-center justify-content-center h-45px max-h-45px w-45px max-w-45px rounded-pill" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="#8a8a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
        
                        {{-- <img 
                            src="" 
                            alt=""
                            loading="lazy"
                            class="img-cover position-absolute top-0 left-0 right-0 bottom-0 rounded-pill"
                        /> --}}
                    </button>
        
                    <ul class="dropdown-menu dropdown-menu-end py-10 px-0 m-0 w-300px bg-second-bg-color rounded-4 mt-10">
                        <li>
                            <a href="{{ route("page.profile", ["id" => Auth::guard("web")->id()]) }}" class="navbar-link position-relative d-flex align-items-center gap-3 py-10 px-20">
                                <div class="img-holder bg-transparent border border-2 border-color d-flex align-items-center justify-content-center h-50px max-h-50px w-50px max-w-50px rounded-pill" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none"
                                        stroke="#8a8a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                    
                                    {{-- <img 
                                        src="" 
                                        alt=""
                                        loading="lazy"
                                        class="img-cover position-absolute top-0 left-0 right-0 bottom-0 rounded-pill"
                                    /> --}}
                                </div>
        
                                <div class="text-start mt-4">
                                    <p class="mb-2 text-truncate text-capitalize">mohamed-1234567</p>
                                    <p class="text-second-color">July 21, 2005</p>
                                </div>
                            </a>
                        </li>
        
                        <div class="border my-10 border-1 border-color w-100"></div>

                        <li>
                            <a href="{{ route("index") }}" class="navbar-link py-10 px-20 d-flex align-items-center gap-2 text-capitalize text-second-color label-small">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>

                                home
                            </a>
                        </li>
        
                        <li>
                            <a href="{{ route("page.profile", ["id" => Auth::guard("web")->id()]) }}" class="navbar-link py-10 px-20 d-flex align-items-center gap-2 text-capitalize text-second-color label-small">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>

                                profile
                            </a>
                        </li>

                        <li>
                            <a href="{{ route("page.shopping.card") }}" class="navbar-link py-10 px-20 d-flex align-items-center gap-2 text-capitalize text-second-color label-small">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" /><path d="M9 11v-5a3 3 0 0 1 6 0v5" /></svg>
                            
                                order
                            </a>
                        </li>

                        <li>
                            <a href="{{ route("page.settings", ["id" => Auth::guard("web")->id()]) }}" class="navbar-link py-10 px-20 d-flex align-items-center gap-2 text-capitalize text-second-color label-small">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>

                                settings
                            </a>
                        </li>

                        <div class="border my-10 border-1 border-color w-100"></div>

                        <li>
                            <form class="w-100" data-form-logout>
                                <button type="submit" class="navbar-link w-100 py-10 px-20 d-flex align-items-center gap-2 text-capitalize text-second-color label-small">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>

                                    Sign out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="d-flex align-items-center gap-0">
                <a href="{{ route("auth.login") }}" class="btn btn-login h-40px">login</a>

                <a href="{{ route("auth.register") }}" class="btn btn-primary h-40px">create account</a>
            </div>
        @endif
    </div>
</nav>

@push("scripts")
    <script>
        
    </script>
@endpush