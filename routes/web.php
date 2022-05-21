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

Route::get('/', function () {
    return view('page.home');
});

<<<<<<< HEAD
Route::get('/values', function () {
    return view('page.values');
});
=======
Route::get('/news', [Controller::class, 'news'])->name('news');

>>>>>>> b8598c0a0e2111084f1b024b70b5090a05b8f0fc

