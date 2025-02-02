@extends("layouts.app")

@section("title") Product List With Cart | Shopping Card @endsection

@section("body")
    <div class="container d-flex align-items-center justify-content-center" style="min-height: calc(100vh - 191px);">
        <div class="bg-second-bg-color rounded-4 border border-2 border-color p-20 w-100 max-w-550px">
            <h2 class="mb-20 text-capitalize text-orange-color title-medium">your orders (0)</h2>

            {{-- <div class="h-350px d-flex flex-column align-items-center justify-content-center gap-4">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="150"  height="150"  viewBox="0 0 24 24"  fill="none"  stroke="#8a8a8a"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.5 21h-3.926a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304h11.339a2 2 0 0 1 1.977 2.304l-.263 1.708" /><path d="M16 19h6" /><path d="M19 16v6" /><path d="M9 11v-5a3 3 0 0 1 6 0v5" /></svg>

                <p class="text-second-color text-capitalize">your added item will appear here</p>
            </div> --}}

            <div class="bg-fourth-bg-color p-20 rounded-3 mb-20">
                <div class="max-h-400px overflow-y-scroll scroll-none">
                    <div class="d-flex align-items-center justify-content-between gap-3">
                        <a href="{{ route("page.product.details", ["id" => 1]) }}" class="d-flex align-items-center gap-3">
                            <img 
                                src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                alt="" 
                                loading="lazy"
                                class="rounded-3 w-60px h-60px img-cover"
                            />
    
                            <div class="content">
                                <p class="truncate-line-2 lh-sm label-medium">order one</p>
    
                                <div class="d-flex align-items-center gap-3">
                                    <span class="d-flex align-items-center gap-0 text-orange-color label-small">
                                        1
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="14"  height="14"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="3"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                                    </span>

                                    <p class="text-second-color label-small">$50.5</p>
                                </div>
                            </div>
                        </a>
    
                        <form data-delete-order>
                            @csrf

                            <button type="submit" class="btn btn-secondary w-44px h-44px p-0">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M13 17h-7v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M22 22l-5 -5" /><path d="M17 22l5 -5" /></svg>
                            </button>
                        </form>
                    </div>
    
                    <div class="my-20 border border-1 border-color w-100"></div>

                    <div class="d-flex align-items-center justify-content-between gap-3">
                        <a href="{{ route("page.product.details", ["id" => 1]) }}" class="d-flex align-items-center gap-3">
                            <img 
                                src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                alt="" 
                                loading="lazy"
                                class="rounded-3 w-60px h-60px img-cover"
                            />
    
                            <div class="content">
                                <p class="truncate-line-2 lh-sm label-medium">order one</p>
    
                                <div class="d-flex align-items-center gap-3">
                                    <span class="d-flex align-items-center gap-0 text-orange-color label-small">
                                        1
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="14"  height="14"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="3"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                                    </span>

                                    <p class="text-second-color label-small">$50.5</p>
                                </div>
                            </div>
                        </a>
    
                        <form data-delete-order>
                            @csrf

                            <button type="submit" class="btn btn-secondary w-44px h-44px p-0">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M13 17h-7v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M22 22l-5 -5" /><path d="M17 22l5 -5" /></svg>
                            </button>
                        </form>
                    </div>
    
                    <div class="my-20 border border-1 border-color w-100"></div>

                    <div class="d-flex align-items-center justify-content-between gap-3">
                        <a href="{{ route("page.product.details", ["id" => 1]) }}" class="d-flex align-items-center gap-3">
                            <img 
                                src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                alt="" 
                                loading="lazy"
                                class="rounded-3 w-60px h-60px img-cover"
                            />
    
                            <div class="content">
                                <p class="truncate-line-2 lh-sm label-medium">order one</p>
    
                                <div class="d-flex align-items-center gap-3">
                                    <span class="d-flex align-items-center gap-0 text-orange-color label-small">
                                        1
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="14"  height="14"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="3"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                                    </span>

                                    <p class="text-second-color label-small">$50.5</p>
                                </div>
                            </div>
                        </a>
    
                        <form data-delete-order>
                            @csrf

                            <button type="submit" class="btn btn-secondary w-44px h-44px p-0">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M13 17h-7v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M22 22l-5 -5" /><path d="M17 22l5 -5" /></svg>
                            </button>
                        </form>
                    </div>
    
                    <div class="my-20 border border-1 border-color w-100"></div>
                </div>

                <div class="d-flex align-items-center justify-content-between gap-3">
                    <p class="text-second-color text-capitalize fw-normal label-medium">order total</p>

                    <h4 class="label-medium">$46.50</h4>
                </div>
            </div>

            <button type="button" class="btn btn-primary text-uppercase w-100 h-50px label-small">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-checklist"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" /><path d="M14 19l2 2l4 -4" /><path d="M9 8h4" /><path d="M9 12h2" /></svg>

                checkout
            </button>
        </div>
    </div>
@endsection