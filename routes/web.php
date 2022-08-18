<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\error;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AjaxFORMCRUDController;
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

// dashboard resource routes
Route::get('/', [DashboardController::class, 'index']);

// login resource routes
Route::get('/login', [LoginController::class, 'index']);

// logout resource routes
Route::get('/logout', [LogoutController::class, 'index']);

// profile resource routes
Route::get('/profile', [ProfileController::class, 'index']);

// show profile resource routes
Route::get('/profile/show', [ProfileController::class, 'show']);

Route::get('/kuisioner', function () {
    return view('kuisioner.index', [
        'title' => 'Kuisioner',
    ]);
});


// Route::get('/test', function () {
//     return redirect()->route('client.test', [
//         'title' => 'Test',
//     ]);
// });


// Route::get('/master-kuisioner', function () {
//     return view('kuisioner.master', [
//         'title' => 'Master Kuisioner',
//     ]);
// });

// Route Kuisioner

Route::get('/test', function () {
    return view('Client.test', [
        'title' => 'Test',
    ]);
});

Route::get('quiz-main', [KuisionerController::class, 'mainQuis']);

Route::get('master-kuisioner', [AjaxFORMCRUDController::class, 'index']);
Route::get('test-kuisioner', [AjaxFORMCRUDController::class, 'index1']);
Route::post('add-update-book', [AjaxFORMCRUDController::class, 'store']);
Route::post('edit-book', [AjaxFORMCRUDController::class, 'edit']);
Route::post('delete-book', [AjaxFORMCRUDController::class, 'destroy']);

Route::post('add-pilihan-jawaban', [AjaxFORMCRUDController::class, 'pilihanJawaban']);
Route::post('delete-pilihan', [AjaxFORMCRUDController::class, 'destroyPilihan']);



// error resource routes
Route::get('/{any}', [error::class, 'index']);
