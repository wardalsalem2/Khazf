@include('component.header')

<style>
    .experiences-section {
        padding: 80px 30px;
        background: var(--background-color);
        margin-top: 100px;
        margin-bottom: 40px;
        min-height: 100vh;
    }

    .experiences-section h1 {
        text-align: center;
        font-size: 2.8rem;
        font-weight: 700;
        color: var(--heading-color);
        margin-bottom: 50px;
        border-bottom: 4px solid var(--accent-color);
        display: inline-block;
        padding-bottom: 10px;
    }

    .card {
        background-color: var(--surface-color);
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        color: var(--default-color);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .card:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 30px rgba(0,0,0,0.15);
    }

    .card-img-top {
        height: 220px;
        width: 100%;
        object-fit: cover;
        border-bottom: 3px solid var(--accent-color);
    }

    .card-body {
        flex-grow: 1;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--heading-color);
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 1rem;
        color: var(--default-color);
        margin-bottom: 12px;
        flex-grow: 1;
    }

    .card-info {
        font-weight: 600;
        margin-bottom: 6px;
        color: var(--accent-color);
    }

    .btn-primary {
        background-color: var(--accent-color);
        color: var(--contrast-color);
        border: none;
        padding: 10px 22px;
        font-weight: 600;
        border-radius: 14px;
        align-self: flex-start;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }

    .btn-primary:hover {
        background-color:rgb(4, 9, 11);
        color: var(--contrast-color);
        text-decoration: none;
    }
</style>

<div class="container experiences-section">

    <form action="{{ route('experiences.index') }}" method="GET" class="mb-4 d-flex flex-wrap gap-3 align-items-center">

        <!-- Dropdown Location -->
        <select name="location" class="form-select" style="max-width: 200px;">
            <option value=""> Select Location </option>
            <option value="Amman" {{ request('location') == 'Amman' ? 'selected' : '' }}>Amman</option>
            <option value="Irbid" {{ request('location') == 'Irbid' ? 'selected' : '' }}>Irbid</option>
            <option value="Zarqa" {{ request('location') == 'Zarqa' ? 'selected' : '' }}>Zarqa</option>
            <option value="Mafraq" {{ request('location') == 'Mafraq' ? 'selected' : '' }}>Mafraq</option>
            <option value="Madaba" {{ request('location') == 'Madaba' ? 'selected' : '' }}>Madaba</option>
            <option value="Jerash" {{ request('location') == 'Jerash' ? 'selected' : '' }}>Jerash</option>
            <option value="Ajloun" {{ request('location') == 'Ajloun' ? 'selected' : '' }}>Ajloun</option>
            <option value="Karak" {{ request('location') == 'Karak' ? 'selected' : '' }}>Karak</option>
            <option value="Tafilah" {{ request('location') == 'Tafilah' ? 'selected' : '' }}>Tafilah</option>
            <option value="Ma'an" {{ request('location') == "Ma'an" ? 'selected' : '' }}>Ma'an</option>
            <option value="Aqaba" {{ request('location') == 'Aqaba' ? 'selected' : '' }}>Aqaba</option>
            <option value="Balqa" {{ request('location') == 'Balqa' ? 'selected' : '' }}>Balqa</option>
        </select>

        <!-- Title input -->
        <input 
            type="text" 
            name="title" 
            value="{{ request('title') }}" 
            placeholder="Search by Title" 
            class="form-control" 
            style="max-width: 200px;"
        />

        <!-- Description input -->
        <input 
            type="text" 
            name="description" 
            value="{{ request('description') }}" 
            placeholder="Search by Description" 
            class="form-control" 
            style="max-width: 200px;"
        />

        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ route('experiences.index') }}" class="btn btn-secondary">Reset</a>
    </form>

    <h1>Available Experiences</h1>

    <div class="row">
        @forelse ($experiences as $experience)
            <div class="col-md-4 mb-4 d-flex">
                <div class="card">
                    @if($experience->images->first())
                        <img src="{{ asset('storage/' . $experience->images->first()->image_path) }}" alt="Experience Image" class="card-img-top" />
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $experience->title }}</h5>
                        <p class="card-text">{{ Str::limit($experience->description, 100) }}</p>
                        <p class="card-info"><strong>Location:</strong> {{ $experience->location }}</p>
                        <p class="card-info"><strong>Price:</strong> ${{ $experience->price }}</p>
                        <a href="{{ route('experiences.show', $experience->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No experiences found.</p>
        @endforelse
    </div>
</div>


@include('component.footer')
