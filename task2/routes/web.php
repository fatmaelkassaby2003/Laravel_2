<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiteController,AboutController,ContactController,PostController};
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

Route::get('/',[SiteController::class,'home']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/send-message',[ContactController::class,'sendMessage']);
Route::get('/posts',[PostController::class,'index']);


