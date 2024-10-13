<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NomorHpController;
use App\Http\Controllers\AboutController;




/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes(['register' => false]);

Route::group(['middleware' => ['is_admin','auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // booking
    Route::get('bookings', [\App\Http\Controllers\BookingController::class, 'index'])->name('bookings.index');

    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except('show');
    // blogs
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class)->except('show');
    // profile
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

});

// Rute untuk halaman utama
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

//about
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// Rute blogs
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('blogs/{blog:slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('blogs/category/{category:slug}', [\App\Http\Controllers\BlogController::class, 'category'])->name('blog.category');

// Halaman kontak
Route::get('contact', function() {
    return view('contact');
})->name('contact');

// Rute booking
Route::post('booking', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');

Route::get('bookings', [\App\Http\Controllers\BookingController::class, 'index'])->name('bookings.index');
Route::delete('bookings/{id}', [\App\Http\Controllers\BookingController::class, 'destroy'])->name('bookings.destroy');


Route::post('/submit-nomor-hp', [NomorHpController::class, 'store'])->name('submit.nomor_hp');

