<?php

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
    return view('home');
});

Route::get('/memories', function () {
    return view('upload', [
        'type' => 'memories'
    ]);
});

Route::get('/receipt', function () {
    return view('upload', [
        'type' => 'receipt'
    ]);
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/thank-you', function () {
    return view('thank-you');
});

Route::get('/activity/{slug}', function () {
    return view('activity-detail');
});