<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'hello laravel';
    // return view('welcome');
});

Route::get('hello-world', function () {
    return 'hello world from laravel framework';
    // return view('welcome');
});

Route::get('form', function () {
    return view('form');
});

Route::get('user/{id}', function ($id) {
    return 'user ' . $id;
});

Route::get('motor', function () {
    return 'Dashboard motor';
});

Route::get('motor/{jenis}', function ($jenis) {
    return 'Motor dengan jenis ' . $jenis;
});

Route::get('motor/{jenis?}', function ($jenis = null) {
    return $jenis ? 'Motor dengan jenis ' . $jenis : 'Motor Dashboard Page';
});

Route::post('submit', [FormController::class, 'submitForm'])->name('submit');
