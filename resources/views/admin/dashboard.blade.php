<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
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
        <div class="d-flex align-items-center mb-4">
            <h5 class="mb-0">🛠️ Admin Dashboard</h5>
        </div>
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
            <li class="nav-item mb-2">
                <a href="{{ route('admin.experiences.index') }}"
                   class="nav-link text-white {{ request()->routeIs('admin.experiences.*') ? 'active' : '' }}">
                    🛍️ Manage Products
                </a>
            </li>
            <li class="nav-item mt-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light w-100">🚪 Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-fill p-5" style="margin-left: 250px; padding-top: 40px;">
        <h2 class="mb-4 border-bottom pb-3">Dashboard</h2>

        <div class="row mb-4">
            <!-- Users Card -->
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <h3 class="mb-2">{{ \App\Models\User::count() }}</h3>
                        <hr class="mx-auto" style="width: 50px;">
                        <p class="text-muted mb-0">Total Registered Users</p>
                    </div>
                </div>
            </div>

            <!-- Experiences Card -->
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <h3 class="mb-2">{{ \App\Models\Experience::count() }}</h3>
                        <hr class="mx-auto" style="width: 50px;">
                        <p class="text-muted mb-0">Total Experiences</p>
                    </div>
                </div>
            </div>

            <!-- Bookings Card -->
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <h3 class="mb-2">{{ \App\Models\Booking::count() }}</h3>
                        <hr class="mx-auto" style="width: 50px;">
                        <p class="text-muted mb-0">Total Bookings</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h5 class="card-title border-bottom pb-2">Recent Activity</h5>
                <div class="text-center py-5">
                    <p class="text-muted">No recent activity to display</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
