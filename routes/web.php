<?php

use App\Http\Controllers\front\Blog;
use App\Http\Controllers\front\BookingForm;
use App\Http\Controllers\front\Contact;
use App\Http\Controllers\front\Gallery;
use App\Http\Controllers\front\Home;
use App\Http\Controllers\front\room;
use App\Http\Controllers\front\Team;
use App\Models\Page_page;
use App\Models\Post_category;
use App\Models\Post_tag;
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
Route::get('/blog-post', function () { // ! le SHOW de blog
    $data = [
        'static_page' => Page_page::find(1),
        'posts_categories' => Post_category::all(),
        'posts_tags' => Post_tag::all(),
    ];
    return view('front.pages.page', $data);
});

Route::resource('/booking-form', BookingForm::class);

Route::resource('/contact', Contact::class);

Route::resource('/gallery', Gallery::class);

Route::resource('/team', Team::class);

Route::resource('/room', room::class);
Route::post('/room/send-form', [room::class, 'saveFormSidebar'])->name('room.send-form');

Route::get('/room1', function () {
    return view('front.pages.room');
});

/* -------------------------------------------------------------------------- */
/*                                   BACKEND                                  */
/* -------------------------------------------------------------------------- */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
