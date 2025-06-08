<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Payment;
class ExperiencesController extends Controller
{
    public function index()
    {
        $experiences = Experience::with('images')->where('status', 'active')->get();
        return view('experiences.index', compact('experiences'));
    }

    public function show($id)
    {
        $experience = Experience::with([
            'images' => function ($query) {
                $query->limit(3);
            }
        ])->findOrFail($id);

        return view('experiences.show', compact('experience'));
    }





public function storeBooking(Request $request, $id)
{
    $validated = $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email',
    'booking_date' => 'required|date|after_or_equal:today',
    'number_of_people' => 'required|integer|min:1',

    'amount' => 'required|numeric',
    'payment_method' => 'required|string',
    'transaction_id' => 'required|string',
]);


    // Get or create user
    $user = User::firstOrCreate(
        ['email' => $validated['email']],
        [
            'name' => $validated['name'],
            'password' => Hash::make(Str::random(10)),
            'role' => 'user',
        ]
    );

    $experience = Experience::findOrFail($id);

$total_price = $experience->price * $validated['number_of_people'];

$booking = Booking::create([
    'user_id' => $user->id,
    'experience_id' => $id,
    'booking_date' => $validated['booking_date'],
    'number_of_people' => $validated['number_of_people'],
    'total_price' => $total_price,
]);


    // Create payment
    Payment::create([
        'booking_id' => $booking->id,
        'user_id' => $user->id,
        'amount' => $validated['amount'],
        'payment_method' => $validated['payment_method'],
        'transaction_id' => $validated['transaction_id'],
    ]);

    return back()->with('success', 'Booking and payment recorded successfully!');
}
}


