<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{


    public function storeReview(Request $request, $experience_id)
    {
        \Log::info('Review Request:', $request->all());
        $request->validate([
            'email' => 'required|email',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        // Find user by email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'You must book this experience before leaving a review.'])->withInput();
        }


        // Check if user has a booking for this experience
        $bookingExists = Booking::where('user_id', $user->id)
            ->where('experience_id', $experience_id)
            ->exists();

        if (!$bookingExists) {
            return back()->withErrors(['email' => 'You cannot leave a review without booking this experience first.'])->withInput();
        }


        // Store the review
        Review::create([
            'user_id' => $user->id,
            'experience_id' => $experience_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Thank you for your review!');
    }


}
