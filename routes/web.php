<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', [UserController::class, 'index'])->name('user.home');

Route::get('/publication/preview/{id}', [UserController::class, 'preview'])->name('publication.preview');

Route::get('/company', function () {
    return view('user.company');
});
Route::get('/struktur-organisasi', function () {
    return view('user.struktur');
});
Route::get('/panduan', function () {
    return view('user.panduan');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/admin/categories', CategoryController::class);

    Route::resource('/admin/publication',PublicationController::class);

    Route::resource('/admin/announcement', AnnouncementController::class);


});
