<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{Home,Form};

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
    return view('components.anasayfa');
});
Route::get('/about', function () {
    return view('components.about');
});

Route::get('/services', function () {
    return view('components.services');
});

Route::get('/galeri', function () {
    return view('components.galeri');
});

Route::get('/contact', function () {
    return view('components.contact');
});

// Route::get('form',[Form::class,'formsayfasi']);
