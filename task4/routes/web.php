<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiteController,AboutController,ContactController,PostController,AuthController};
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

Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/send-message',[ContactController::class,'sendMessage']);
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post}',[PostController::class,'show']);

//Authentication
Route::group(['middleware'=>'auth.mid'],function(){
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'storeUser'])->name('store.user');
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginUser'])->name('login.user');
});
// Route::get('/register',[AuthController::class,'register'])->name('register')->middleware('auth.mid');
// Route::post('/register',[AuthController::class,'storeUser'])->name('store.user')->middleware('auth.mid');
// Route::get('/login',[AuthController::class,'login'])->name('login')->middleware('auth.mid');
// Route::post('/login',[AuthController::class,'loginUser'])->name('login.user')->middleware('auth.mid');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
