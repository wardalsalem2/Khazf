@include('component.header')
@php
function displayStars($rating) {
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $stars .= '<span class="star">&#9733;</span>'; // filled star
        } else {
            $stars .= '<span class="star empty">&#9733;</span>'; // empty star
        }
    }
    return $stars;
}
@endphp

<style>
    .experience-details {
        background: var(--background-color);
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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

    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background: #fff;
        margin: 10% auto;
        padding: 30px;
        border-radius: 15px;
        width: 500px;
        position: relative;
    }

    .close {
        position: absolute;
        right: 15px;
        top: 10px;
        font-size: 24px;
        cursor: pointer;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .btn-primary,
    .btn-success {
        padding: 10px 30px;
        font-size: 1.1rem;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: var(--accent-color);
        color: #fff;
    }

    .btn-success {
        background-color: #28a745;
        color: #fff;
    }
        .star {
    font-size: 20px;
    color: #ffd700; /* gold color */
    margin-right: 2px;
}
.star.empty {
    color: #ccc;
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
        <p><strong>Category:</strong> {{ $experience->categories }}</p>
    </div>

    <div class="text-center mt-4">
        <button onclick="document.getElementById('bookingModal').style.display='block'" class="btn btn-primary mt-3">
            Book Now
        </button>
    </div>
</div>

<div id="bookingModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('bookingModal').style.display='none'">&times;</span>
        <h4>Complete Your Booking</h4>
        <form action="{{ route('experience.book', $experience->id) }}" method="POST">
            @csrf

            <h5>User Info</h5>
            <input type="text" name="name" class="form-control mb-2" placeholder="Full Name" required>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>

            <h5>Booking Info</h5>
            <input type="date" name="booking_date" class="form-control mb-2" required min="{{ date('Y-m-d') }}">
            <input type="number" id="number_of_people" name="number_of_people" class="form-control mb-2"
                placeholder="Number of People" min="1" required>

            <h5>Payment Info</h5>
            <input type="number" id="total_price" name="amount" class="form-control mb-2" placeholder="Total Price"
                readonly>

            <select name="payment_method" class="form-control mb-2" required>
                <option value="" disabled selected>Select Payment Method</option>
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="cash">Cash</option>
            </select>
            <input type="text" name="transaction_id" class="form-control mb-2" placeholder="Transaction ID" required>

            <button type="submit" class="btn btn-success w-100">Submit Booking</button>
        </form>
    </div>
</div>

@if(session('success'))
    <div id="successModal" class="modal" style="display:block;">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('successModal').style.display='none'">&times;</span>
            <h4 style="color: green;">{{ session('success') }}</h4>
        </div>
    </div>
@endif
<div class="container mt-5">
    <h2>Reviews</h2>
    @if ($experience->reviews->count() > 0)
        @foreach ($experience->reviews as $review)
            <div class="review-item mb-3 p-3 border rounded">
                <strong>{{ $review->user->name ?? 'Anonymous' }}</strong> <br>
                <span>{!! displayStars($review->rating) !!}</span>
                <p>{{ $review->comment }}</p>
                <small class="text-muted">{{ $review->created_at->format('M d, Y') }}</small>
            </div>
        @endforeach
    @else
        <p>No reviews yet. Be the first to review this experience!</p>
    @endif
</div>
<div class="container mt-4">
    <h3>Your Review</h3>
       @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('reviews.store', $experience->id) }}" method="POST">
        @csrf
        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required placeholder="Your email">
            @error('email')
    <div class="text-danger">{{ $message }}</div>
@enderror
        </div>
        <div class="form-group mb-2">
            <label for="rating">Rating</label>
            <select name="rating" id="rating" class="form-control" required>
                <option value="" disabled selected>Select rating</option>
                <option value="5">★★★★★ (5 stars)</option>
                <option value="4">★★★★☆ (4 stars)</option>
                <option value="3">★★★☆☆ (3 stars)</option>
                <option value="2">★★☆☆☆ (2 stars)</option>
                <option value="1">★☆☆☆☆ (1 star)</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" rows="4" class="form-control" placeholder="Write your review (optional)"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Submit Review</button>
    </form>
</div>



<script>
    const pricePerPerson = {{ $experience->price }};

    const numberInput = document.getElementById('number_of_people');
    const totalPriceInput = document.getElementById('total_price');

    function updateTotalPrice() {
        let numPeople = parseInt(numberInput.value);
        if (!numPeople || numPeople < 1) {
            totalPriceInput.value = '';
            return;
        }
        let total = numPeople * pricePerPerson;
        totalPriceInput.value = total.toFixed(2);
    }

    numberInput.addEventListener('input', updateTotalPrice);
</script>
<script>
    window.onclick = function(event) {
        const modal = document.getElementById('successModal');
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>

@include('component.footer')