@extends("layouts.app")

@section("title") Product List With Cart | Checkout @endsection

@section("body")
    <section class="section">
        <div class="container">
            <form action="{{ route("checkout.store") }}" method="POST" class="row gy-3 gx-4">
                @csrf

                <div class="col-12 col-lg-8">
                    <div class="bg-second-bg-color rounded-4 p-20 w-100 max-w-550p mb-15">
                        <h2 class="mb-20 title-small">Billing details</h2>

                        <div class="row row-cols-1 row-cols-lg-2 g-3 mb-15">
                            <div class="col">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#eb9a99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path><path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z"></path></svg>
                                    </span>
                    
                                    <input 
                                        type="text"
                                        placeholder="First Name"
                                        name="first_name"
                                        class="form-control rounded-start-0 ps-0"
                                    />
                                </div>
                            </div>

                            <div class="col">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#eb9a99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path><path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z"></path></svg>
                                    </span>
                    
                                    <input 
                                        type="text"
                                        placeholder="Last Name"
                                        name="last_name"
                                        class="form-control rounded-start-0 ps-0"
                                    />
                                </div>
                            </div>
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
                        </div>

                        <div class="mb-15">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home-link"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20.085 11.085l-8.085 -8.085l-9 9h2v7a2 2 0 0 0 2 2h4.5" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 1.807 1.143" /><path d="M21 21m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M21 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M16 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M21 16l-5 3l5 2" /></svg>
                                </span>
                
                                <input 
                                    type="text"
                                    placeholder="Address"
                                    name="address"
                                    class="form-control rounded-start-0 ps-0"
                                />
                            </div>
                        </div>

                        <div class="mb-15">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
                                </span>
                
                                <input 
                                    type="number"
                                    placeholder="Phone Number"
                                    name="phone"
                                    class="form-control rounded-start-0 ps-0"
                                />
                            </div>
                        </div>

                        <div class="mb-15">
                            <div class="input-group">
                                <span class="input-group-text align-items-start h-100px">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="#eb9a99"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-notes"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" /><path d="M9 7l6 0" /><path d="M9 11l6 0" /><path d="M9 15l4 0" /></svg>
                                </span>

                                <textarea class="form-control h-100px rounded-start-0 ps-0" name="other_notes" placeholder="Other Notes (optional)" row="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="bg-second-bg-color rounded-4 p-20 w-100 max-w-550p">
                        <div class="d-flex align-items-center justify-content-between gap-3 border-bottom border-2 border-color pb-10 mb-10">
                            <h3 class="label-medium">Product</h3>

                            <h3 class="label-medium">Subtotal</h3>
                        </div>

                        <div class="d-grid gap-0">
                            @foreach ($carts as $cart)
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="d-flex flex-wrap gap-1">
                                        <p class="truncate-line-2">{{ $cart->product->title }}</p>

                                        <div class="text-orange-color d-flex align-items-center gap-0 label-small">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="16"  height="16"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                                            {{ $cart->quantity }}
                                        </div>
                                    </div>

                                    <span class="label-small">${{ $cart->total }}</span>
                                </div>

                                <div class="border border-1 border-color my-10"></div>
                            @endforeach
                        </div>

                        <div class="d-flex align-items-center justify-content-between gap-3 mt-5">
                            <p class="text-second-color text-capitalize fw-normal label-large">total</p>
    
                            <h4 class="label-medium">${{ number_format($carts->sum('total'), 2) }}</h4>
                        </div>

                        <button type="submit" class="btn btn-primary rounded-3 text-uppercase w-100 h-50px label-small mt-20">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-checklist"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" /><path d="M14 19l2 2l4 -4" /><path d="M9 8h4" /><path d="M9 12h2" /></svg>
        
                            Process to Checkout
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection