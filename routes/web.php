<?php

use App\Http\Controllers\back\Blog as BackBlog;
use App\Http\Controllers\back\BookingForm as BackBookingForm;
use App\Http\Controllers\back\Contact as BackContact;
use App\Http\Controllers\back\dashboard;
use App\Http\Controllers\back\Gallery as BackGallery;
use App\Http\Controllers\back\Home as BackHome;
use App\Http\Controllers\back\Mailbox;
use App\Http\Controllers\back\Room as BackRoom;
use App\Http\Controllers\back\RoomCategory;
use App\Http\Controllers\back\RoomList;
use App\Http\Controllers\back\RoomReview;
use App\Http\Controllers\back\RoomService;
use App\Http\Controllers\back\Team as BackTeam;
use App\Http\Controllers\back\TeamCategory;
use App\Http\Controllers\front\Blog;
use App\Http\Controllers\front\BookingForm;
use App\Http\Controllers\front\Contact;
use App\Http\Controllers\front\Gallery;
use App\Http\Controllers\front\Home;
use App\Http\Controllers\front\room;
use App\Http\Controllers\front\Team;
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


Route::get('/dashboard', [dashboard::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {

    Route::resource('/mailbox', Mailbox::class);

    Route::get('/home/edit-static', [BackHome::class, 'editStatic']);
    Route::put('/home/edit-static', [BackHome::class, 'updateStatic']);
    Route::resource('/home', BackHome::class);

    Route::get('/blog/edit-static', [BackBlog::class, 'editStatic']);
    Route::put('/blog/edit-static', [BackBlog::class, 'updateStatic']);
    Route::resource('/blog', BackBlog::class);

    Route::get('/booking-form/edit-static', [BackBookingForm::class, 'editStatic']);
    Route::put('/booking-form/edit-static', [BackBookingForm::class, 'updateStatic']);
    Route::resource('/booking-form', BackBookingForm::class);

    Route::get('/contact/edit-static', [BackContact::class, 'editStatic']);
    Route::put('/contact/edit-static', [BackContact::class, 'updateStatic']);
    Route::resource('/contact', BackContact::class);

    Route::get('/gallery/edit-static', [BackGallery::class, 'editStatic']);
    Route::put('/gallery/edit-static', [BackGallery::class, 'updateStatic']);
    Route::resource('/gallery', BackGallery::class);

    Route::prefix('room')->name('room.')->group(function () {
        Route::get('/edit-static', [BackRoom::class, 'editStatic']);
        Route::put('/edit-static', [BackRoom::class, 'updateStatic']);
        Route::get('/edit-static-sidebar', [BackRoom::class, 'editStaticSidebar']);
        Route::put('/edit-static-sidebar', [BackRoom::class, 'updateStaticSidebar']);
        Route::resource('/', BackRoom::class)->parameter('', 'room');
        Route::resource('/category', RoomCategory::class);
        Route::resource('/review', RoomReview::class);
        Route::resource('/service', RoomService::class);
    });

    Route::get('/team/edit-static', [BackTeam::class, 'editStatic']);
    Route::put('/team/edit-static', [BackTeam::class, 'updateStatic']);
    Route::resource('/team', BackTeam::class);
    Route::resource('/team/category', TeamCategory::class);

    Route::get('/list-room/edit-static', [RoomList::class, 'editStatic']);
    Route::put('/list-room/edit-static', [RoomList::class, 'updateStatic']);
    Route::resource('/list-room', RoomList::class);
});

Route::get('/dashboard/mailbox/sos/send', function () {
    return view('dashboard');
});

require __DIR__ . '/auth.php';
