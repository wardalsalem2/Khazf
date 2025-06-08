<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile/edit', [AdminController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');

    // Experiences
    Route::get('/experiences', [AdminController::class, 'manageExperiences'])->name('experiences.index');
    Route::get('/experiences/create', [AdminController::class, 'createExperience'])->name('experiences.create');
    Route::post('/experiences', [AdminController::class, 'storeExperience'])->name('experiences.store');
    Route::get('/experiences/{id}/edit', [AdminController::class, 'editExperience'])->name('experiences.edit');
    Route::put('/experiences/{id}', [AdminController::class, 'updateExperience'])->name('experiences.update');
    Route::delete('/experiences/{id}', [AdminController::class, 'destroyExperience'])->name('experiences.destroy'); // هذا هو الراوت الذي كان ناقص
});



use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    // Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    // Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/experiences', [ExperiencesController::class, 'index'])->name('experiences.index');
Route::get('/experiences/{id}', [ExperiencesController::class, 'show'])->name('experiences.show');
Route::post('/experience/{id}/book', [ExperiencesController::class, 'storeBooking'])->name('experience.book');

Route::post('/experiences/{experience}/reviews', [ReviewController::class, 'storeReview'])
    ->name('reviews.store');