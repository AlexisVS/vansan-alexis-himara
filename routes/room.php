<?php

use App\Http\Controllers\back\RoomCategory;
use App\Http\Controllers\back\RoomReview;
use App\Http\Controllers\back\RoomService;
use App\Models\Room;
use Illuminate\Support\Facades\Route;

/* -------------------------------------------------------------------------- */
/*                       Route for room in the dashbaord                      */
/* -------------------------------------------------------------------------- */
Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {

Route::get('/room/edit-static', [Room::class, 'editStatic']);
Route::put('/room/edit-static', [Room::class, 'updateStatic']);
Route::get('/room/edit-static-sidebar', [Room::class, 'editStaticSidebar']);
Route::put('/room/edit-static-sidebar', [Room::class, 'updateStaticSidebar']);
Route::resource('/room/category', RoomCategory::class);
Route::resource('/room/review', RoomReview::class);
Route::resource('/room/service', RoomService::class);
Route::resource('/room', Room::class);

});