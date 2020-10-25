<?php

use App\Http\Controllers\DescController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [DescController::class, 'index']);
Route::get('/about', [DescController::class, 'about']);
Route::get('/contact', [DescController::class, 'contact']);

Route::resource('posts', PostsController::class);
