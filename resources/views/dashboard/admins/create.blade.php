@extends('dashboard.layouts.app')

@section('body')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Username">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                </div>

                <div class="mb-3">
                    <label class="form-label">Short Bio</label>
                    <input type="text" class="form-control" name="bio" placeholder="Enter Your Short Bio">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation"
                        placeholder="Enter Your Confirm Password">
                </div>

                <div class="mb-3">
                    <div class="form-label">Role Admin</div>
                    <select name="role" class="form-select">
                        <option value="super_admin">Super Admin</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Add Admin</button>
            </form>
        </div>
    </div>
@endsection