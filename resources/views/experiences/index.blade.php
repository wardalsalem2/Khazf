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
    <h1>Available Experiences</h1>
    <div class="row">
        @foreach ($experiences as $experience)
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
        @endforeach
    </div>
</div>

@include('component.footer')
