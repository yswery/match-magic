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

Route::post('/upload-receipt', ['name' => 'upload.receipt', 'uses' => 'UploadController@uploadReceipt']);

Route::post('/upload-images', ['name' => 'upload.images', 'uses' => 'UploadController@uploadImages']);

Route::get('/memories', function () {
    return view('upload', [
        'type' => 'memories'
    ]);
});
