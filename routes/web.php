<?php

use App\Http\Controllers\back\Blog as BackBlog;
use App\Http\Controllers\back\BookingForm as BackBookingForm;
use App\Http\Controllers\back\Contact as BackContact;
use App\Http\Controllers\back\dashboard;
use App\Http\Controllers\back\Gallery as BackGallery;
use App\Http\Controllers\back\Home as BackHome;
use App\Http\Controllers\back\Mailbox;
use App\Http\Controllers\back\Room as BackRoom;
use App\Http\Controllers\back\Team as BackTeam;
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

Route::get('/', [Home::class, 'index']);
Route::post('/send-form', [Home::class, 'sendForm']);

Route::resource('/blog', Blog::class);
Route::get('/blog-post', [Blog::class, 'customShow']);

Route::resource('/booking-form', BookingForm::class);

Route::resource('/contact', Contact::class);

Route::resource('/gallery', Gallery::class);

Route::resource('/team', Team::class);

Route::resource('/room', room::class);
Route::post('/room/send-form', [room::class, 'saveFormSidebar'])->name('room.send-form');

/* -------------------------------------------------------------------------- */
/*                                   BACKEND                                  */
/* -------------------------------------------------------------------------- */


Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');
Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    
    Route::resource('/home', BackHome::class);
    Route::resource('/blog', BackBlog::class);
    Route::resource('/booking-form', BackBookingForm::class);
    Route::resource('/contact', BackContact::class);
    Route::resource('/gallery', BackGallery::class);
    Route::resource('/room', BackRoom::class);
    Route::resource('/team', BackTeam::class);
    Route::resource('/mailbox', Mailbox::class);
});
Route::get('/dashboard/mailbox/sos/send', function () {
    return view('dashboard');
});

require __DIR__ . '/auth.php';
