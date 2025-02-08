@extends("dashboard.layouts.app")

@section("body")
    <div class="card">
        <div class="card-body">
            <form action="{{ route("admin.update", ["id" => $admin->id]) }}" method="POST">
                @csrf
                @method("PUT")

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" value="{{ $admin->name }}" placeholder="Enter Your Username">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" value="{{ $admin->email }}" placeholder="Enter Your Email Address">
                </div>

                <div class="mb-3">
                    <label class="form-label">Short Bio</label>
                    <input type="text" class="form-control" name="bio" value="{{ $admin->bio }}" placeholder="Enter Your Short Bio">
                </div>

                <div class="mb-3">
                    <label class="form-label">Old Password</label>
                    <input type="password" class="form-control" name="old_password" placeholder="Enter Your Old Password">
                </div>

                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control" name="new_password" placeholder="Enter Your New Password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="new_password_confirmation"
                        placeholder="Enter Your Confirm Password">
                </div>

                @if (Auth::guard("admin")->user()->role === "super_admin")
                    <div class="mb-3 {{ $admin->id === Auth::guard("admin")->user()->id ? "d-none" : "" }}">
                        <div class="form-label">Role Admin</div>
                        <select name="role" class="form-select">
                            <option value="super_admin" {{ $admin->role === "super_admin" ? "selected" : "" }}>Super Admin</option>
                            <option value="admin" {{ $admin->role === "admin" ? "selected" : "" }}>Admin</option>
                        </select>
                    </div>
                @endif

                <button type="submit" class="btn btn-info">Edit Admin</button>
            </form>
        </div>
    </div>
@endsection