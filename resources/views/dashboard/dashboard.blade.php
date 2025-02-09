@extends('dashboard.layouts.app')

@section('body')
    <h2 class="page-title my-3">List Admins</h2>

    <div class="card mb-3">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                @if ($admins->isEmpty())
                    <div class="card-body">You have not added any admins yet.</div>
                @else
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Short Bio</th>
                            <th>Role</th>
                            <th>Time</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($admins as $admin)
                            <tr class="row-{{ $admin->id }}">
                                <td>
                                    <div class="flex-fill">
                                        <div class="font-weight-medium">{{ $admin->name }}</div>
                                    </div>
                                </td>

                                <td>{{ $admin->email }}</td>

                                <td class="text-nowrap">{{ $admin->bio ?? '404 not found bio.' }}</td>

                                <td class="text-nowrap">{{ $admin->role }}</td>

                                <td class="text-nowrap">{{ $admin->created_at->format('F j, Y') }}</td>

                                <td>
                                    <div class="btn-list flex-nowrap">
                                        @if (Auth::guard('admin')->id() === $admin->id || Auth::guard('admin')->user()->role === 'super_admin')
                                            <a href="{{ route('admin.edit', ['id' => $admin->id]) }}"
                                                class="btn btn-6 btn-outline-info">
                                                Edit
                                            </a>
                                        @endif

                                        @if (Auth::guard('admin')->user()->role === 'super_admin')
                                            <button type="button" class="btn btn-6 btn-outline-danger"
                                                data-bs-toggle="modal" data-bs-target="#modal-danger-{{ $admin->id }}">
                                                Delete
                                            </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </div>

    <h2 class="page-title my-3">List Users</h2>

    <div class="card mb-3">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                @if ($users->isEmpty())
                    <div class="card-body">You have not added any users yet.</div>
                @else
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Short Bio</th>
                            <th>Time</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr class="row-{{ $user->id }}">
                                <td>
                                    <div class="d-flex flex-nowrap align-items-center gap-3">
                                        <div class="img-holder position-relative bg-transparent border border-2 border-color d-flex align-items-center justify-content-center rounded-pill"
                                            style="width: 50px; height: 50px;">
                                            @if ($user->profile_photo)
                                                <img src="{{ asset('storage/' . $user->profile_photo) }}"
                                                    alt="{{ $user->name }}" loading="lazy"
                                                    class="img-cover position-absolute top-0 left-0 right-0 bottom-0 rounded-pill" />
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 24 24" fill="none" stroke="#8a8a8a" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>
                                            @endif
                                        </div>

                                        <div class="font-weight-medium">{{ $user->name }}</div>
                                    </div>
                                </td>

                                <td>{{ $user->email }}</td>

                                <td class="text-nowrap">{{ $user->bio ?? '404 not found bio.' }}</td>

                                <td class="text-nowrap">{{ $user->created_at->format('F j, Y') }}</td>=
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </div>

    <h2 class="page-title my-3">List Products</h2>

    <div class="card mb-3">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                @if ($products->isEmpty())
                    <div class="card-body">You have not added any products yet.</div>
                @else
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Content</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Time</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <div class="d-flex flex-nowrap align-items-center gap-3">
                                        <div class="img-holder position-relative bg-transparent border border-2 border-color d-flex align-items-center justify-content-center rounded-2"
                                            style="width: 50px; height: 50px;">
                                            @if ($product->imageProducts->first()->main_image)
                                                <img src="{{ asset('storage/' . $product->imageProducts->first()->main_image) }}"
                                                    alt="{{ $product->title }}" loading="lazy"
                                                    class="img-cover position-absolute top-0 left-0 right-0 bottom-0 rounded-2"
                                                    style="width: 50px; height: 50px;" />
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 24 24" fill="none" stroke="#8a8a8a" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M17 17h-11v-14h-2" />
                                                    <path d="M6 5l14 1l-1 7h-13" />
                                                </svg>
                                            @endif
                                        </div>

                                        {{ $product->title }}
                                    </div>
                                </td>

                                <td class="text-truncate" style="max-width: 100px;">{{ $product->content }}</td>

                                <td>
                                    {{ "$" . $product->price }}
                                </td>

                                <td>{{ $product->quantity . ' Quantity' }}</td>

                                <td>{{ $product->created_at->format('F j, Y') }}</td>

                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                                            class="btn btn-6 btn-outline-info">
                                            Edit
                                        </a>

                                        <button type="button" class="btn btn-6 btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#modal-product-{{ $product->id }}">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </div>

    <h2 class="page-title my-3">List Orders</h2>

    <div>
        @if ($orders->isEmpty())
            <div class="card">
                <div class="card-body">There are no orders yet.</div>
            </div>
        @else
            <div class="row row-cols-1 row-cols-lg-2 g-3">
                @foreach ($orders as $order)
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-home-{{ $order->id }}" class="nav-link active" data-bs-toggle="tab">My Information</a>
                                    </li>
                                    
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-profile-{{ $order->id }}" class="nav-link" data-bs-toggle="tab">My Purchases</a>
                                    </li>
                                </ul>

                                {{ $order->created_at->format('F j, Y') }}

                                <div class="card-actions">
                                    <div class="dropdown">
                                        <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1"><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path></svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route("order.edit", ["id" => $order->id]) }}" class="dropdown-item">Edit Order</a>

                                            <button type="submit" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#modal-order-{{ $order->id }}">Delete Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="tabs-home-{{ $order->id }}">
                                        <div class="d-grid gap-1">
                                            <div>{{ $order->first_name . " " . $order->last_name }}</div>
                                            <div>{{ $order->address }}</div>
                                            <div>{{ $order->other_notes }}</div>
                                            <div class="text-uppercase">{{ $order->status }}</div>
                                        </div>

                                        <div class="card my-3"></div>

                                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                            <a href="tel:{{ $order->phone }}" class="btn btn-link d-flex align-items-center gap-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-2"><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path></svg>
                                                {{ $order->phone }}
                                            </a>

                                            <a href="mailto:{{ $order->email }}" class="btn btn-link d-flex align-items-center gap-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-2"><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path><path d="M3 7l9 6l9 -6"></path></svg>
                                                {{ $order->email }}
                                            </a>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tabs-profile-{{ $order->id }}">
                                        <div>
                                            @foreach ($order->products as $product)
                                                <div class="list-group-item">
                                                    <div class="row align-items-start">
                                                        <div class="col-auto">
                                                            <a href="#">
                                                                <span class="avatar avatar-1" style="background-image: url({{ asset("storage/" . $product->imageProducts->first()->main_image) }})"></span>
                                                            </a>
                                                        </div>

                                                        <div class="col text-truncate">
                                                            <div>
                                                                <div class="text-reset d-block">{{ $product->title }} <span class="text-info">{{ $order->quantity }}</span></div>
                                                                <div class="d-block text-secondary text-truncate mt-n1">{{ $product->created_at->format('F j, Y') }}</div>
                                                            </div>

                                                            <div>${{ $product->price }}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if (!$loop->last)
                                                    <div class="card my-2"></div>
                                                @endif
                                            @endforeach
                                        </div>

                                        <div class="card my-3"></div>

                                        <div class="d-grid gap-1">
                                            <div class="d-flex align-items-center justify-content-between gap-2">
                                                <div>Total:</div>
    
                                                <div>${{ $order->total }}</div>
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
    </div>

    @include('dashboard.partials.pop-up')
@endsection
