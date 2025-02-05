@extends("layouts.app")

@section("title") Product List With Cart @endsection

@section("body")
    <section class="section">
        <div class="container-xxl">
            <h2 class="title-section text-capitalize d-flex align-items-center gap-2 title-medium">product list</h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card card-primary">
                            <div class="position-relative mb-30">
                                <a href="{{ route("page.product.details", ["id" => $product->id]) }}">
                                    <img 
                                        src="{{ asset("storage/" . $product->imageProducts->first()->main_image) }}" 
                                        alt="{{ $product->title }}" 
                                        loading="lazy"
                                        class="rounded-4 max-h-230px img-cover"
                                        style="min-height: 230px;"
                                    />
                                </a>
                
                                <div class="w-100 position-absolute" style="bottom: -22px;">
                                    <a href="{{ route("page.product.details", ["id" => $product->id]) }}" class="btn btn-third mx-auto label-small" id="addToCart" style="width: max-content;">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
            
                                        buy product
                                    </a>
                                </div>
                            </div>
                
                            <div class="content">
                                <h3 class="text-truncate mb-5 label-medium">{{ $product->title }}</h3>
                
                                <p class="truncate-line-2 mb-5 text-second-color">{{ $product->content }}</p>
                
                                <div class="d-flex align-items-center gap-2 text-orange-color label-small">
                                    ${{ $product->price }}
                                    @if ($product->off)
                                        <span class="text-decoration-line-through text-second-color">${{ $product->off }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <ul class="d-flex align-items-center justify-content-center gap-3 mt-30">
                @if ($products->currentPage() > 1)
                    <li class="d-flex align-items-center gap-2">
                        <a href="{{ $products->previousPageUrl() }}" class="btn btn-primary p-0 w-48px h-48px label-medium">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-arrow-big-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9.586 4l-6.586 6.586a2 2 0 0 0 0 2.828l6.586 6.586a2 2 0 0 0 2.18 .434l.145 -.068a2 2 0 0 0 1.089 -1.78v-2.586h7a2 2 0 0 0 2 -2v-4l-.005 -.15a2 2 0 0 0 -1.995 -1.85l-7 -.001v-2.585a2 2 0 0 0 -3.414 -1.414z" /></svg>
                        </a>
                    </li>
                @endif
            
                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    @if ($i == 1 && $products->currentPage() == 1)
                        @continue
                    @endif
                    <li>
                        <a href="{{ $products->url($i) }}" class="{{ $i == $products->currentPage() ? 'btn btn-primary w-48px h-48px' : '' }} label-medium">{{ $i }}</a>
                    </li>
                @endfor
            
                @if ($products->hasMorePages())
                    <li>
                        <a href="{{ $products->nextPageUrl() }}" class="btn btn-primary p-0 w-48px h-48px label-medium">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-arrow-big-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.089 3.634a2 2 0 0 0 -1.089 1.78l-.001 2.586h-6.999a2 2 0 0 0 -2 2v4l.005 .15a2 2 0 0 0 1.995 1.85l6.999 -.001l.001 2.587a2 2 0 0 0 3.414 1.414l6.586 -6.586a2 2 0 0 0 0 -2.828l-6.586 -6.586a2 2 0 0 0 -2.18 -.434l-.145 .068z" /></svg>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </section>
@endsection