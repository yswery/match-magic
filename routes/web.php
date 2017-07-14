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

Route::get('/', ['name' => 'home', 'uses' => 'HomeController@home']);
Route::post('/upload-receipt', ['name' => 'upload.receipt', 'uses' => 'UploadController@uploadReceipt']);
Route::post('/upload-memories', ['name' => 'upload.memories', 'uses' => 'UploadController@uploadMemory']);
