<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\site3Controller;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});
Route::get('test',[TestController::class,'index'])->name('test');
Route::get('test/{name}',[TestController::class,'check']);
Route::get('nael',[TestController::class,'nael'])->name('nael');
/*Welcome Code */

Route::prefix('site2')->group(function () {
    Route::get('/',[Site2Controller::class,'index'])->name('home');
    Route::get('/about',[Site2Controller::class,'about'])->name('about');
    Route::get('/contact',[Site2Controller::class,'contact'])->name('contact');
    Route::get('/posts',[Site2Controller::class,'posts'])->name('posts');
    });
Route::prefix('site3')->group(function () {
    Route::get('/',[site3Controller::class,'index'])->name('site3home');
    // Route::get('/about',[Site2Controller::class,'about'])->name('about');
    // Route::get('/contact',[Site2Controller::class,'contact'])->name('contact');
    // Route::get('/posts',[Site2Controller::class,'posts'])->name('posts');
    });
/*Welcome Code */

// Route::get('post',[PostController::class,'index']);
// Route::get('post/create',[PostController::class,'create']);
Route::resource('post', PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
