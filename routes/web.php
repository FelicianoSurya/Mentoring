<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/comingsoon',function(){
    return view('page.comingsoon');
});

Route::get('/', function () {
    return view('page.home');
});

Route::get('/values', function () {
    return view('page.values');
});

Route::get('/about-us', function () {
    return view('page.aboutUs');
});

Route::get('/news', [Controller::class, 'news'])->name('news');

Route::get('/committee', function(){
    return view('page.committee');
});

Route::get('/gallery', function(){
    return view('page.gallery');
});

Route::get('/announcements', [Controller::class, 'announcement']);

Route::get('/listKelompok', [Controller::class, 'list']);
