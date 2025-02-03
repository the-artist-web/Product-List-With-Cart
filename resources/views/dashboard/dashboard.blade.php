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

                                <td>{{ $admin->bio ?? "404 not found bio." }}</td>

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
                                            <button onclick="destroyAdmin({{ $admin->id }})" type="button" class="btn btn-6 btn-outline-danger">
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
                                    <div class="flex-fill">
                                        <div class="font-weight-medium">{{ $user->name }}</div>
                                    </div>
                                </td>

                                <td>{{ $user->email }}</td>

                                <td>{{ $user->bio ?? "404 not found bio." }}</td>

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
@endsection

@push("scripts_dashboard")
    <script>
        async function destroyAdmin(id) {
            if (!confirm("Are you sure you want to delete?")) return;

            let url = "{{ route('admin.destroy', ':id') }}".replace(':id', id);

            let response = await fetch(url, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").getAttribute("content"),
                    "Accept": "application/json",
                }
            });

            let data = await response.json();

            if (data.success === true) document.querySelector(`.row-${id}`).remove();
        };
    </script>
@endpush