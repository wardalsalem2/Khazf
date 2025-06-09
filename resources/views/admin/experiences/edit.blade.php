<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Experience</title>
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
        <div class="flex-fill p-5" style="margin-left: 250px; padding-top: 40px;">
            <div class="bg-white p-4 rounded shadow-sm" style="max-width: 900px; margin: 0 auto;">
                <h2 class="mb-4">✏️ Edit Experience</h2>

                <form action="{{ route('admin.experiences.update', $experience->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $experience->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"
                            required>{{ $experience->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" value="{{ $experience->location }}"
                            required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" value="{{ $experience->price }}"
                                step="0.01" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Duration</label>
                            <input type="text" name="duration" class="form-control" value="{{ $experience->duration }}"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" value="{{ $experience->date }}"
                                required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="categories" class="form-control" required>
                            <option value="" disabled>Choose a category</option>
                            <option value="Traditional Ceramics" {{ $experience->categories == 'Traditional Ceramics' ? 'selected' : '' }}>Traditional Ceramics</option>
                            <option value="Handicraft Market" {{ $experience->categories == 'Handicraft Market' ? 'selected' : '' }}>Handicraft Market</option>
                            <option value="Pottery Workshop" {{ $experience->categories == 'Pottery Workshop' ? 'selected' : '' }}>Pottery Workshop</option>
                            <option value="Cultural Tour" {{ $experience->categories == 'Cultural Tour' ? 'selected' : '' }}>Cultural Tour</option>
                            <option value="Art Exhibitions" {{ $experience->categories == 'Art Exhibitions' ? 'selected' : '' }}>Art Exhibitions</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select" required>
                            <option value="active" {{ $experience->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $experience->status == 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Images</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($experience->images as $img)
                                <img src="{{ asset('storage/' . $img->image_path) }}" alt="Experience Image"
                                    style="width: 100px; height: 100px; object-fit: cover; border: 1px solid #ccc; border-radius: 4px;">
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload New Images (optional)</label>
                        <input type="file" name="images[]" class="form-control" multiple>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-primary">Update Experience</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>