<?php

use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\site3Controller;
use App\Http\Controllers\Site4Controller;
use App\Http\Controllers\RelationController;
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

Route::prefix('relation')->group(function () {
    Route::get('/',[RelationController::class,'index'])->name('relation_index');
    Route::get('one_to_many',[RelationController::class,'one_to_many'])->name('one_to_many');
    Route::Post('one_to_many',[RelationController::class,'one_to_many_submit'])->name('one_to_many_submit');
});

Route::resource('order',OrderController::class);

//Route::resource('user', UserController::class);
Route::get('tes',[TestController::class,'index'])->name('test');
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

Route::prefix('site4')->group(function(){
     Route::get('/',[Site4Controller::class,'index'])->name('site4index');
     Route::post('/',[Site4Controller::class,'store'])->name('site4form');
    });
Route::get('/insert',function(){

    DB::insert('insert into news (id, title, body,created_at,updated_at) values (?, ?, ?, ?, ?)', [2, 'Dayle','ooooooooo',now(),now()]);
});
Route::get('/insert2',function(){
    DB::table('news')->insert(['title'=>'aaaa','body'=>'Nael']);
});
Route::get('/insert3',function(){
    DB::table('test')->insert(['name'=>'','body'=>'Nael','created_at'=>now(),'updated_at'=>now()]);
});



