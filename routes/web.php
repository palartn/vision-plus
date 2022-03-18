<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Site2Controller;
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
Route::get('test/{name}',[TestCoclsntroller::class,'check']);
Route::get('nael',[TestController::class,'nael'])->name('nael');
/*Welcome Code */

Route::prefix('site2')->group(function () {
    Route::get('/',[Site2Controller::class,'index'])->name('home');
    Route::get('/about',[Site2Controller::class,'about'])->name('about');
    Route::get('/contact',[Site2Controller::class,'contact'])->name('contact');
    Route::get('/posts',[Site2Controller::class,'posts'])->name('posts');
    });
/*Welcome Code */
