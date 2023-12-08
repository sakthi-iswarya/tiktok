<?php

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
    return view('welcome');
});

Route::get('index',[App\Http\Controllers\controller::class, 'index']);
Route::get('follow',[App\Http\Controllers\controller::class, 'follow']);
Route::get('likes',[App\Http\Controllers\controller::class, 'likes']);
Route::get('support',[App\Http\Controllers\controller::class, 'support']);
Route::get('view',[App\Http\Controllers\controller::class, 'view']);
Route::get('comment',[App\Http\Controllers\controller::class, 'comment']);
Route::get('shares',[App\Http\Controllers\controller::class, 'shares']);
Route::get('live',[App\Http\Controllers\controller::class, 'live']);