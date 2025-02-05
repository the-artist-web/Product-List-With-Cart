@extends("layouts.app")

@section("title") Product List With Cart | Product Details @endsection

@section("body")
    <section class="section h-100">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center g-4" style="min-height: calc(100vh - 160px);">
                <div class="col-12 col-lg-5">
                    <div id="product-details" class="carousel slide">
                        <div class="carousel-inner mb-10">
                            @foreach (json_decode($product->imageProducts->first()->images) as $image)
                                <div class="carousel-item {{ $loop->first ? "active" : "" }}">
                                    <img 
                                        src="{{ asset("storage/" . $image) }}" 
                                        alt="{{ $product->title }}" 
                                        loading="lazy"
                                        class="rounded-4 max-h-450px border border-2 border-color img-cover" 
                                        style="min-height: 450px;"
                                    />
                                </div>
                            @endforeach
                        </div>

                        <div id="product-detail-down" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row row-cols-4 g-2">
                                        @foreach (array_chunk(json_decode($product->imageProducts->first()->images), 4) as $chunkIndex => $chunk)
                                            <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                                                <div class="row row-cols-4 g-2">
                                                    @foreach ($chunk as $index => $image)
                                                        <div class="col">
                                                            <img 
                                                                src="{{ asset("storage/" . $image) }}" 
                                                                alt="{{ $product->title }}"
                                                                loading="lazy"
                                                                class="rounded-4 border border-2 border-color img-cover" 
                                                                style="cursor: pointer;"
                                                                data-bs-target="#product-details" 
                                                                data-bs-slide-to="{{ ($chunkIndex * 4) + $index }}"
                                                            />
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            @if (count(json_decode($product->imageProducts->first()->images)) >= 5)
                                <button class="carousel-control-prev" type="button" data-bs-target="#product-detail-down" data-bs-slide="prev">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#product-detail-down" data-bs-slide="next">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <h1 class="mb-15 fw-bolder display-small">{{ $product->title }}</h1>

                    <p class="text-second-color lh-5">{{ $product->content }}</p>

                    <div class="d-grid gap-2 mt-30 mb-50">
                        <h2 class="headline-small">${{ $product->price }}</h2>

                        <p class="text-second-color text-decoration-line-through label-large">${{ $product->off }}</p>
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

                        <form action="" method="" class="w-100">
                            @csrf

                            <button type="submit" class="btn btn-primary mx-auto mx-lg-0 w-100 max-w-300px h-55px rounded-3 label-small">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="27"  height="27"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>

                                add to card
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection