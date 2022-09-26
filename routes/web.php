<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\error;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AjaxFORMCRUDController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\SectionController;
use App\Models\periode;
use App\Models\pertanyaan;
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

Route::get('/pertanyaan', [PertanyaanController::class, 'index']);
Route::post('/pertanyaan', [PertanyaanController::class, 'store']);
Route::post('/pertanyaan/delete/{pertanyaan}', [PertanyaanController::class, 'destroy']);
Route::post('/pertanyaan/update/{pertanyaan}', [PertanyaanController::class, 'update']);

Route::post('/jawaban', [JawabanController::class, 'store']);
Route::post('/jawaban/delete/{jawaban}', [JawabanController::class, 'destroy']);

Route::get('/kuesioner', [KuesionerController::class, 'index']);

Route::get('/quiz', [KuesionerController::class, 'index']);
Route::get('/quiz/{section}', [KuesionerController::class, 'pertanyaan']);



// - ROUTE KUISIONER CLIENT -

// Route Main Kuisioner 
Route::get('quiz-main', [KuisionerController::class, 'mainQuis']);

// Route Index Kuisioner 
Route::get('kuisioner', [KuisionerController::class, 'index']);

// - ROUTE AJAX CRUD FORM -

// Route Main CRUD Kuisioner 
Route::get('master-kuisioner', [AjaxFORMCRUDController::class, 'index']);

// Route Insert Pertanyaan Kuisioner 
Route::post('add-update-book', [AjaxFORMCRUDController::class, 'store']);

// Route Edit Pertanyaan Kuisioner 
Route::post('edit-book', [AjaxFORMCRUDController::class, 'edit']);

// Route Delete Pertanyaan Kuisioner 
Route::post('delete-book', [AjaxFORMCRUDController::class, 'destroy']);

// Route Add Sub-Pertanyaan/Pilihan Kuisioner 
Route::post('add-pilihan-jawaban', [AjaxFORMCRUDController::class, 'pilihanJawaban']);

// Route Delete Sub-Pertanyaan/Pilihan Kuisioner 
Route::post('delete-pilihan', [AjaxFORMCRUDController::class, 'destroyPilihan']);



// error resource routes
Route::get('/{any}', [error::class, 'index']);






Route::post('/section', [SectionController::class, 'store']);

Route::post('/section/delete/{section}', [SectionController::class, 'destroy']);
