@extends("dashboard.layouts.app")

@section("body")
    <div class="card">
        <div class="card-body">
            <form action="{{ route("order.update", ["id" => $order->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")

                <div class="row row-cols-1 row-cols-lg-2 g-3 mb-3">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path><path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z"></path></svg>
                            </span>
            
                            <input 
                                type="text"
                                placeholder="First Name"
                                name="first_name"
                                value="{{ $order->first_name }}"
                                class="form-control rounded-start-0 ps-3"
                            />
                        </div>
                    </div>

                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path><path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z"></path></svg>
                            </span>
            
                            <input 
                                type="text"
                                placeholder="Last Name"
                                name="last_name"
                                value="{{ $order->last_name }}"
                                class="form-control rounded-start-0 ps-3"
                            />
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="black"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                        </span>
        
                        <input 
                            type="email"
                            placeholder="Email Address"
                            name="email"
                            value="{{ $order->email }}"
                            class="form-control rounded-start-0 ps-3"
                        />
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="black"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home-link"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20.085 11.085l-8.085 -8.085l-9 9h2v7a2 2 0 0 0 2 2h4.5" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 1.807 1.143" /><path d="M21 21m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M21 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M16 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M21 16l-5 3l5 2" /></svg>
                        </span>
        
                        <input 
                            type="text"
                            placeholder="Address"
                            name="address"
                            value="{{ $order->address }}"
                            class="form-control rounded-start-0 ps-3"
                        />
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="black"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
                        </span>
        
                        <input 
                            type="number"
                            placeholder="Phone Number"
                            name="phone"
                            value="{{ $order->phone }}"
                            class="form-control rounded-start-0 ps-3"
                        />
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text align-items-start h-100px">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="black"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-notes"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" /><path d="M9 7l6 0" /><path d="M9 11l6 0" /><path d="M9 15l4 0" /></svg>
                        </span>

                        <textarea class="form-control h-100px rounded-start-0 ps-3" name="other_notes" placeholder="Other Notes (optional)" row="5">{{ $order->other_notes }}</textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-label">Select Status</div>
                    <select name="status" class="form-select">
                        <option value="pending" {{ $order->status === "pending" ? "selected" : "" }}>pending</option>
                        <option value="rejected" {{ $order->status === "rejected" ? "selected" : "" }}>rejected</option>
                        <option value="paid" {{ $order->status === "paid" ? "selected" : "" }}>paid</option>
                        <option value="shipped" {{ $order->status === "shipped" ? "selected" : "" }}>shipped</option>
                        <option value="delivered" {{ $order->status === "delivered" ? "selected" : "" }}>delivered</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-info">Edit Order</button>
            </form>
        </div>
    </div>
@endsection