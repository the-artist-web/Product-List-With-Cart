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

                                <td class="text-nowrap">{{ $admin->bio ?? "404 not found bio." }}</td>

                                <td class="text-nowrap">{{ $admin->role }}</td>

                                <td class="text-nowrap">{{ $admin->created_at->format('F j, Y') }}</td>

                                <td>
                                    <div class="btn-list flex-nowrap">
                                        @if (Auth::guard("admin")->id() === $admin->id || Auth::guard("admin")->user()->role === "super_admin")
                                            <a href="{{ route("admin.edit", ["id" => $admin->id]) }}" class="btn btn-6 btn-outline-info">
                                                Edit
                                            </a>
                                        @endif
                                        
                                        @if (Auth::guard("admin")->user()->role === "super_admin")
                                            <button type="button" class="btn btn-6 btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-danger-{{ $admin->id }}">
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
                            <th class="w-1"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr class="row-{{ $user->id }}">
                                <td>
                                    <div class="d-flex flex-nowrap align-items-center gap-3">
                                        <div class="img-holder position-relative bg-transparent border border-2 border-color d-flex align-items-center justify-content-center rounded-pill" style="width: 50px; height: 50px;">
                                            @if ($user->profile_photo)
                                                <img 
                                                    src="{{ asset("storage/", $user->profile_photo) }}"
                                                    alt="{{ $user->name }}"
                                                    loading="lazy"
                                                    class="img-cover position-absolute top-0 left-0 right-0 bottom-0 rounded-pill"
                                                />
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none"
                                                    stroke="#8a8a8a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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

                                <td class="text-nowrap">{{ $user->bio ?? "404 not found bio." }}</td>

                                <td class="text-nowrap">{{ $user->created_at->format('F j, Y') }}</td>

                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route("page.profile", ["id" => $user->id]) }}" target="_blank" class="btn btn-6 btn-outline-success">
                                            View
                                        </a>
                                    </div>
                                </td>
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
                            <th>Time</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <div class="d-flex flex-nowrap align-items-center gap-3">
                                        <div class="img-holder position-relative bg-transparent border border-2 border-color d-flex align-items-center justify-content-center rounded-2" style="width: 50px; height: 50px;">
                                            @if ($product->imageProducts->first()->main_image)
                                                <img 
                                                    src="{{ asset('storage/' . $product->imageProducts->first()->main_image) }}"
                                                    alt="{{ $product->title }}"
                                                    loading="lazy"
                                                    class="img-cover position-absolute top-0 left-0 right-0 bottom-0 rounded-2"
                                                    style="width: 50px; height: 50px;"
                                                />
                                            @else
                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="25"  height="25"  viewBox="0 0 24 24"  fill="none"  stroke="#8a8a8a"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                                            @endif
                                        </div>

                                        {{ $product->title }}
                                    </div>
                                </td>

                                <td class="text-truncate" style="max-width: 100px;">{{ $product->content }}</td>

                                <td>
                                    {{ "$" . $product->price }}
                                    <span class="text-decoration-line-through text-danger">{{ "$" . $product->off }}</span>
                                </td>

                                <td>{{ $product->created_at->format('F j, Y') }}</td>

                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <a href="{{ route("product.edit", ["id" => $product->id]) }}" class="btn btn-6 btn-outline-info">
                                            Edit
                                        </a>
                                        
                                        <button type="button" class="btn btn-6 btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-product-{{ $product->id }}">
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

    <div class="card mb-3">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                @if ($orders->isEmpty())
                    <div class="card-body">There are no orders yet.</div>
                @else
                    <thead>
                        <tr>
                            <th>Orders</th>
                            <th>Content</th>
                            <th>Price</th>
                            <th>Time</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex flex-nowrap align-items-center gap-3">

                                </div>
                            </td>

                            <td></td>

                            <td></td>

                            <td>{{-- {{ $admin->created_at->format('F j, Y') }} --}}</td>

                            <td>
                                <div class="btn-list flex-nowrap">
                                    <a href="#" class="btn btn-6 btn-outline-info">
                                        Edit
                                    </a>
                                    
                                    <button type="button" class="btn btn-6 btn-outline-danger">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endif
            </table>
        </div>
    </div>

    @include("dashboard.partials.pop-up")
@endsection