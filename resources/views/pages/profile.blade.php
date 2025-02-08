@extends("layouts.app")

@section("title") Product List With Cart | Profile @endsection

@section("body")
    <div class="pb-30">
        <div class="container">
            <div class="bg-second-bg-color rounded-4 p-35 d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start gap-4 position-relative">
                @if ($user->id === Auth::user()->id)
                    <a href="{{ route("page.settings", ["id" => $user->id]) }}" class="btn btn-primary position-absolute z-2 label-small" style="right: 20px; top: 20px;">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="spinner-border border-0 icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>

                        edit profile
                    </a>
                @endif

                <div class="img-holder position-relative border border-2 border-color d-flex align-items-center justify-content-center h-160px max-h-160px w-160px max-w-160px rounded-pill">
                    @if ($user->profile_photo)
                        <img 
                            src="{{ asset("storage/" . $user->profile_photo) }}" 
                            alt="{{ $user->name }}"
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
                    <h1 class="text-capitalize text-center text-lg-start headline-small">
                        @if ($user->username)
                            {{ $user->username }}
                        @else
                            {{ $user->name }}-{{ $user->created_at->format('njyHis') }}
                        @endif
                    </h1>

                    <p class="text-second-color text-center text-lg-start">{{ $user->bio ?? "404 not found bio." }}</p>

                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-2 gap-lg-3">
                        <div class="d-flex align-items-center gap-2">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="#8a8a8a"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-stats"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" /><path d="M18 14v4h4" /><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" /><path d="M3 11h16" /></svg>

                            <p class="text-second-color">{{ $user->created_at->format('F j, Y') }}</p>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="#8a8a8a"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>

                            <p class="text-second-color text-capitalize">you have orders {{ $user->orders->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div>
                @if ($user->orders->isEmpty())
                    <p class="bg-second-bg-color rounded-4 p-25 text-second-color">There are no orders yet.</p>
                @else
                    @if ($user->id === Auth::user()->id)
                        <h2 class="mb-15 text-capitalize title-small">List Order Me</h2>

                        <div class="row row-cols-1 row-cols-lg-2 g-3">
                            @foreach ($user->orders as $order)
                                <div class="col">
                                    <div class="border border-color border-2 rounded-3 bg-second-bg-color py-20 px-20">
                                        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between ps-16 pe-0">
                                            <ul class="nav nav-tabs border-0 d-flex align-items-center gap-3" data-bs-toggle="tabs">
                                                <li class="nav-item">
                                                    <a href="#tabs-home-{{ $order->id }}" class="btn btn-link active label-small" data-bs-toggle="tab">About Order</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#tabs-profile-{{ $order->id }}" class="btn btn-link label-small" data-bs-toggle="tab">Orders</a>
                                                </li>
                                            </ul>
            
                                            <div class="d-flex align-items-center gap-2">
                                                <p class="text-second-color">{{ $order->created_at->format('F j, Y') }}</p>
                
                                                <div class="card-actions">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1"><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path></svg>
                                                        </a>
                
                                                        <form action="{{ route("order.destroy", ["id" => $order->id]) }}" method="POST" class="dropdown-menu dropdown-menu-end bg-third-bg-color border border-color border-2">
                                                            @csrf
                                                            @method("DELETE")

                                                            <button type="submit" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#modal-order-{{ $order->id }}">Delete Order</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="card-body pt-0">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show position-relative" id="tabs-home-{{ $order->id }}">
                                                    <div class="border border-color border-2 p-20 mt-10 mb-20 rounded-4 d-grid gap-2">
                                                        <p class="text-second-color">{{ $order->first_name . " " . $order->last_name }}</p>
                                                        <p class="text-second-color">{{ $order->address }}</p>
                                                        <p class="text-second-color">{{ $order->other_notes }}</p>
                                                        <div class="badge bg-orange-color text-bg-color text-uppercase mt-5 position-absolute label-small" style="top: 15px; right: 15px; width: max-content;">{{ $order->status }}</div>
                                                    </div>
            
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                                        <div class="d-flex align-items-center gap-2 label-small">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#eb9a99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-2"><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path></svg>
                                                            {{ $order->phone }}
                                                        </div>
            
                                                        <div class="d-flex align-items-center gap-2 label-small">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#eb9a99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-2"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path><path d="M3 7l9 6l9 -6"></path></svg>
                                                            {{ $order->email }}
                                                        </div>
                                                    </div>
                                                </div>
            
                                                <div class="tab-pane fade" id="tabs-profile-{{ $order->id }}">
                                                    <div class="border border-color border-2 p-20 mt-10 mb-20 rounded-4">
                                                        @foreach ($order->products as $product)
                                                            <div class="list-group-item">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <img 
                                                                        src="{{ asset("storage/" . $product->imageProducts->first()->main_image) }}" 
                                                                        alt="{{ $product->title }}" 
                                                                        loading="lazy"
                                                                        class="max-w-50px max-h-50px rounded-3 border border-color border-2 img-cover"
                                                                        style="min-width: 50px; min-height: 50px;"
                                                                    />
            
                                                                    <div class="d-flex align-items-center justify-content-between w-100">
                                                                        <div>
                                                                            <div class="text-reset d-flex align-items-center gap-2 label-medium">
                                                                                {{ $product->title }} 
                                                                                <span class="text-orange-color fw-normal label-small">{{ $order->quantity }}</span>
                                                                            </div>
                                                                            <p class="text-second-color d-block text-secondary text-truncate mt-n1">{{ $product->created_at->format('F j, Y') }}</p>
                                                                        </div>
            
                                                                        <h3 class="label-small">${{ $product->price }}</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            @if (!$loop->last)
                                                                <div class="border border-color border-1 my-10"></div>
                                                            @endif
                                                        @endforeach
                                                    </div>
            
                                                    <div class="d-grid gap-1">
                                                        <div class="d-flex align-items-center justify-content-between gap-10">
                                                            <h3 class="text-second-color fw-normal label-medium">Total:</h3>
                
                                                            <h3 class="fw-normal label-medium">${{ $order->total }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </section>
@endsection