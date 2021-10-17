<?php

use App\Http\Controllers\front\home;
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

Route::resource('/', home::class);

Route::get('/room', function () {
    return view('front.pages.rooms-list');
});

Route::get('/team', function () {
    return view('front.pages.staff');
});

Route::get('/gallery', function () {
    return view('front.pages.gallery');
});

Route::get('/contact', function () {
    return view('front.pages.contact');
});

Route::get('/booking-form', function () {
    return view('front.pages.booking-form');
});

/* -------------------------------------------------------------------------- */
/*                                   BACKEND                                  */
/* -------------------------------------------------------------------------- */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
