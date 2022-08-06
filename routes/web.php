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

// Route::get('/test', function () {
//     return redirect()->route('client.test', [
//         'title' => 'Test',
//     ]);
// });

Route::get('/test', function () {
    return view('Client.test', [
        'title' => 'Test',
    ]);
});

Route::get('/quiz-1', function () {
    return view('kuisioner.quiz-1', [
        'title' => 'Kuisioner 1',
    ]);
});

Route::get('/quiz-2', function () {
    return view('kuisioner.quiz-2', [
        'title' => 'Kuisioner 2',
    ]);
});

Route::get('/quiz-3', function () {
    return view('kuisioner.quiz-3', [
        'title' => 'Kuisioner 3',
    ]);
});

Route::get('/quiz-4', function () {
    return view('kuisioner.quiz-4', [
        'title' => 'Kuisioner 4',
    ]);
});

Route::get('/quiz-5', function () {
    return view('kuisioner.quiz-5', [
        'title' => 'Kuisioner 5',
    ]);
});

Route::get('/quiz-6', function () {
    return view('kuisioner.quiz-6', [
        'title' => 'Kuisioner 6',
    ]);
});

Route::get('/quiz-7', function () {
    return view('kuisioner.quiz-7', [
        'title' => 'Kuisioner 7',
    ]);
});

Route::get('/quiz-', function () {
    return view('kuisioner.quiz-8', [
        'title' => 'Kuisioner 8',
    ]);
});

