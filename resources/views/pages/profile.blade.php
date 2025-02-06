@extends("layouts.app")

@section("title") Product List With Cart | Profile @endsection

@section("body")
    <section class="section">
        <div class="container">
            <div class="bg-second-bg-color rounded-4 p-35 d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start gap-4 position-relative">
                <a href="{{ route("page.settings", ["id" => 1]) }}" class="btn btn-primary position-absolute z-2 label-small" style="right: 20px; top: 20px;">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="spinner-border border-0 icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>

                    edit profile
                </a>

                <div class="img-holder position-relative border border-2 border-color d-flex align-items-center justify-content-center h-160px max-h-160px w-160px max-w-160px rounded-pill">
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
                </div>

                <div class="d-grid gap-3">
                    <h1 class="text-capitalize text-center headline-small">mohamed-2225073456</h1>

                    <p class="text-second-color text-center text-lg-start">404 not found bio.</p>

                    <div class="d-flex flex-wrap align-items-center gap-2 gap-lg-3">
                        <div class="d-flex align-items-center gap-2">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="#8a8a8a"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-stats"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" /><path d="M18 14v4h4" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" /><path d="M3 11h16" /></svg>

                            <p class="text-second-color">February 2, 2025</p>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="#8a8a8a"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>

                            <p class="text-second-color text-capitalize">you have orders 0</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-scroll scroll-none mt-10">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase label-medium" scope="col">Product</th>
                            <th class="text-uppercase label-medium" scope="col">Status</th>
                            <th class="text-uppercase label-medium" scope="col">Quantity</th>
                            <th class="text-uppercase label-medium" scope="col">Price</th>
                            <th class="text-uppercase w-4 label-medium" scope="col">Subtotal</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex flex-nowrap align-items-center gap-3">
                                    <img 
                                        src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                        alt="" 
                                        loading="lazy"
                                        class="rounded-3 w-70px h-70px img-cover"
                                    />

                                    <h3 class="text-capitalize text-nowrap title-small">order name</h3>
                                </div>
                            </td>

                            <td>
                                <h4 class="text-capitalize fw-normal title-small">shipped</h4>
                            </td>

                            <td>
                                <h4 class="text-second-color fw-normal title-small">1 Quantity</h4>
                            </td>

                            <td>
                                <h4 class="text-second-color fw-normal title-small">$387</h4>
                            </td>

                            <td>
                                <h4 class="text-second-color fw-normal title-small">$774.00</h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection