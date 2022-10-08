<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
    return view('auth/login');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'users','as' => 'users.','middleware' => 'auth'], function (){

    Route::get('/index', [App\Http\Controllers\User\UserController::class, 'getUsersList'])->name('usersIndex');
    Route::get('user',[App\Http\Controllers\User\UserController::class,'index']);
    Route::post('storeUser',[App\Http\Controllers\User\UserController::class,'store']);

});

Route::get('/postindex', [PostController::class, 'getPosts'])->name('postsIndex');
Route::get('/getusers', [PostController::class, 'getusers'])->name('getusers');
Route::post('/storepost', [PostController::class, 'store'])->name('storepost');
Route::get('/index', [PostController::class, 'index'])->name('index');
//Route::resource('post',PostController::class);

Route::get('/categoryindex', [\App\Http\Controllers\CategoryController::class, 'getcategories'])->name('categoryindex');
Route::get('category',[\App\Http\Controllers\CategoryController::class,'index']);
Route::post('storecategory',[\App\Http\Controllers\CategoryController::class,'store']);
