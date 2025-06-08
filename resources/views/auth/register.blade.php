{{-- @include('component.header')

<section class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background: #f8f8f8;">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 500px;">
        <h3 class="text-center mb-4">Register to Khazf</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="form-control @error('name') is-invalid @enderror" required>
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="form-control @error('email') is-invalid @enderror" required>
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    required>
                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn w-100 text-white" style="background-color: #ff6b00;">Register</button>

            <div class="mt-3 text-center">
                <span>Already have an account?</span> <a href="{{ route('login') }}">Login here</a>
            </div>
        </form>
    </div>
</section>

@include('component.footer') --}}