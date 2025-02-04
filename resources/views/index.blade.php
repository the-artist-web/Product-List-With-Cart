@extends("layouts.app")

@section("title") Product List With Cart @endsection

@section("body")
    <section class="section">
        <div class="container">
            <h2 class="title-section text-capitalize d-flex align-items-center gap-2 title-medium">product list</h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card card-primary">
                            <div class="position-relative mb-30">
                                <a href="{{ route("page.product.details", ["id" => $product->id]) }}">
                                    <img 
                                        src="{{ asset("storage/" . $product->imageProducts->first()->main_image) }}" 
                                        alt="{{ $product->title }}" 
                                        loading="lazy"
                                        class="rounded-4 max-h-250px img-cover"
                                        style="min-height: 250px;"
                                    />
                                </a>
                
                                <div class="w-100 position-absolute" style="bottom: -22px;">
                                    @if ($order->products->contains($product->id))
                                        <form action="{{ route("order.destroy", ["id" => $order->id]) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                
                                            <button class="btn btn-primary w-44px h-44px p-0 mx-auto">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route("order.store", ["id" => $product->id]) }}" method="POST">
                                            @csrf
                    
                                            <button type="submit" class="btn btn-third mx-auto label-small">
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                    
                                                add to card
                                            </button>
                                        </form>
                                    @endif
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
        </div>
    </section>
@endsection