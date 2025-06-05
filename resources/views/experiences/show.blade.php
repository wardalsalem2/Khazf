@include('component.header')

<style>
    .experience-details {
        background: var(--background-color);
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        margin-top: 100px;
        margin-bottom: 40px;
        min-height: 80vh;
        color: var(--default-color);
    }

    .experience-details h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--heading-color);
        margin-bottom: 30px;
        border-bottom: 3px solid var(--accent-color);
        display: inline-block;
        padding-bottom: 10px;
    }

    .experience-images {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .experience-images img {
        border-radius: 12px;
        object-fit: cover;
        width: 100%;
        height: 250px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }

    .experience-images img:hover {
        transform: scale(1.03);
    }

    .experience-info p {
        font-size: 1.2rem;
        margin-bottom: 14px;
        color: var(--default-color);
    }

    .experience-info strong {
        color: var(--accent-color);
    }
</style>

<div class="container experience-details">
    <h1>{{ $experience->title }}</h1>

    <div class="experience-images">
        @foreach ($experience->images as $image)
            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Experience Image">
        @endforeach
    </div>

    <div class="experience-info">
        <p><strong>Description:</strong> {{ $experience->description }}</p>
        <p><strong>Location:</strong> {{ $experience->location }}</p>
        <p><strong>Price:</strong> ${{ $experience->price }}</p>
        <p><strong>Duration:</strong> {{ $experience->duration }}</p>
        <p><strong>Date:</strong> {{ $experience->date }}</p>
        <p><strong>Category:</strong> {{ $experience->categories }}</p>
    </div>
</div>

@include('component.footer')
