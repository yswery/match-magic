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
    return view('welcome');
});

Route::get('/upload-receipt', function () {
    // #### THIS GET ENDPOINT WILL NOT EXIST LATER, Should be replaced byt the single page application and only post used
    return '<form action="/upload-receipt" method="POST" enctype="multipart/form-data">
              <input type="file" name="receipt" id="receipt">
              <input type="submit" value="Submit">
            </form>';
});


Route::post('/upload-receipt', ['name' => 'upload.receipt', 'uses' => 'UploadController@uploadReceipt']);
