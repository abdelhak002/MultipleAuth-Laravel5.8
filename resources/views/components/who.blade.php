@if (Auth::guard('web')->check())
    <p class="text-success">you are logged in as <strong>User</strong></p>
@else
    <p class="text-danger">You are Logged out as <strong>User</strong></p>
@endif

@if (Auth::guard('admin')->check())
    <p class="text-success">you are logged in as <strong>Admin</strong></p>
@else
    <p class="text-danger">You are Logged out as <strong>Admin</strong></p>
@endif
