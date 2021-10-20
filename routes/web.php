<?php

use App\Http\Controllers\front\Blog;
use App\Http\Controllers\front\BookingForm;
use App\Http\Controllers\front\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* -------------------------------------------------------------------------- */
/*                                  FRONTEND                                  */
/* -------------------------------------------------------------------------- */

Route::resource('/', Home::class);

Route::resource('/blog', Blog::class);

Route::resource('/booking-form', BookingForm::class);

Route::get('/room', function () {
    return view('front.pages.rooms-list');
});
Route::get('/room1', function () {
    return view('front.pages.room');
});


Route::get('/team', function () {
    return view('front.pages.team');
});
Route::get('/blog1', function () {
    return view('front.pages.page');
});

Route::get('/contact', function () {
    return view('front.pages.contact');
});

Route::get('/gallery', function () {
    return view('front.pages.gallery');
});

/* -------------------------------------------------------------------------- */
/*                                   BACKEND                                  */
/* -------------------------------------------------------------------------- */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
