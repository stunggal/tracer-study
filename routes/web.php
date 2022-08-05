<?php

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

Route::get('/', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
    ]);
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/kuisioner', function () {
    return view('kuisioner.index', [
        'title' => 'Kuisioner',
    ]);
});

Route::get('/master-kuisioner', function () {
    return view('kuisioner.master', [
        'title' => 'Master Kuisioner',
    ]);
});
