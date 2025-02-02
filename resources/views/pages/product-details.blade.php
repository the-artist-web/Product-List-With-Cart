@extends("layouts.app")

@section("title") Product List With Cart | Product Details @endsection

@section("body")
    <section class="section h-100">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center g-4" style="min-height: calc(100vh - 160px);">
                <div class="col-12 col-lg-5">
                    <div id="product-details" class="carousel slide">
                        <div class="carousel-inner mb-10">
                            <div class="carousel-item active">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 max-h-450px border border-2 border-color img-cover" 
                                />
                            </div>

                            <div class="carousel-item">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 max-h-450px border border-2 border-color img-cover" 
                                />
                            </div>

                            <div class="carousel-item">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 max-h-450px border border-2 border-color img-cover" 
                                />
                            </div>

                            <div class="carousel-item">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 max-h-450px border border-2 border-color img-cover" 
                                />
                            </div>
                        </div>

                        <div id="product-detail-down" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row row-cols-4 g-2">
                                        <div class="col">
                                            <img 
                                                src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                                alt="" 
                                                loading="lazy"
                                                class="rounded-4 border border-2 border-color img-cover" 
                                                data-bs-target="#product-details" 
                                                data-bs-slide-to="0"
                                            />
                                        </div>
    
                                        <div class="col">
                                            <img 
                                                src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                                alt="" 
                                                loading="lazy"
                                                class="rounded-4 border border-2 border-color img-cover" 
                                                data-bs-target="#product-details" 
                                                data-bs-slide-to="1"
                                            />
                                        </div>
    
                                        <div class="col">
                                            <img 
                                                src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                                alt="" 
                                                loading="lazy"
                                                class="rounded-4 border border-2 border-color img-cover" 
                                                data-bs-target="#product-details" 
                                                data-bs-slide-to="2"
                                            />
                                        </div>
    
                                        <div class="col">
                                            <img 
                                                src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                                alt="" 
                                                loading="lazy"
                                                class="rounded-4 border border-3 border-orange-color img-cover" 
                                                data-bs-target="#product-details" 
                                                data-bs-slide-to="3"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#product-detail-down" data-bs-slide="prev">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#product-detail-down" data-bs-slide="next">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <h1 class="mb-15 fw-bolder display-small">Lorem ipsum dolor sit amet, consectetur</h1>

                    <p class="text-second-color lh-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt sunt molestias eligendi officia quaerat expedita rem. Inventore, repellendus? Adipisci quas non assumenda, ipsa quam et. Repellendus perspiciatis at, ex facilis temporibus iusto tempora blanditiis velit! Nam molestiae quibusdam architecto, rerum est voluptatum autem temporibus sequi quisquam ab dolore, ullam fugiat.</p>

                    <div class="d-grid gap-2 mt-30 mb-50">
                        <h2 class="headline-small">$125.00</h2>

                        <p class="text-second-color text-decoration-line-through label-large">$250.00</p>
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                        <div class="bg-third-bg-color d-flex align-items-center gap-0 h-55px rounded-3 border border-2 border-color">
                            <button class="btn p-0 w-55px d-flex align-items-center justify-content-center">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="25.5"  height="25.5"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-minus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg>
                            </button>
                            
                            <span class="p-0 w-55px d-flex align-items-center justify-content-center border border-2 border-color border-top-0 border-bottom-0 label-medium">1</span>
                            
                            <button class="btn p-0 w-55px d-flex align-items-center justify-content-center">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="25.5"  height="25.5"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            </button>
                        </div>

                        <form class="w-100" data-add-order>
                            @csrf

                            <button type="submit" class="btn btn-primary mx-auto mx-lg-0 w-100 max-w-300px h-55px rounded-3 label-small">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="27"  height="27"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>

                                add to card
                            </button>
                        </form>

                        {{-- <form class="w-100" data-add-order>
                            @csrf

                            <button type="submit" class="btn btn-fourth mx-auto mx-lg-0 w-100 max-w-300px h-55px rounded-3 label-small">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="27"  height="27"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>

                                added to card
                            </button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection