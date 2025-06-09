<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Admin Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link.active {
            background-color: #0d6efd;
            color: white !important;
            border-radius: 6px;
            padding-left: 12px;
        }
    </style>
</head>
<body>

<div class="d-flex" style="min-height: 100vh; background-color: #f8f9fa;">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh; position: fixed;">
        <h5 class="mb-4">🛠️ Admin Dashboard</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('admin.dashboard') }}"
                   class="nav-link text-white {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    📊 Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('admin.profile.edit') }}"
                   class="nav-link text-white {{ request()->routeIs('admin.profile.edit') ? 'active' : '' }}">
                    👤 Edit Profile
                </a>
            </li>
            {{-- <li class="nav-item mb-2">
                <a href="{{ route('admin.experiences.index') }}"
                   class="nav-link text-white {{ request()->routeIs('admin.experiences.*') ? 'active' : '' }}">
                    🛍️ Manage Products
                </a>
            </li> --}}
            <li class="nav-item mt-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light w-100">🚪 Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-fill p-5" style="margin-left: 250px; margin-top: 40px;">
        <div class="bg-white p-4 rounded shadow-sm" style="max-width: 700px; margin: 20px auto;">
            <h2 class="mb-4 border-bottom pb-2">Edit Admin Profile</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.profile.update') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="{{ old('name', $admin->name) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email', $admin->email) }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <small class="text-muted d-block mb-2">(Leave blank to keep current password)</small>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Back to Dashboard</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
