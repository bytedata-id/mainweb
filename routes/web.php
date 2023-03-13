<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
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

Route::get('/produk', function () {
    return view('produk.webdev');
});

Route::get('/admin', [admin::class, 'index']);

Route::controller(admin::class)->group(function(){
    Route::get('admin/home', 'home');
    Route::get('admin/index', 'index');
});