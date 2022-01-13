<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userscontroller;
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
//trainingof laravel
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/test/{name}', function ($name) {
//     return view('test',['mohit'=>$name]);
// });
Route::get("/",[Userscontroller::class,'loadview']);
Route::get("about",[Userscontroller::class,'loadabout']);
Route::get("service",[Userscontroller::class,'loadservice']);
Route::view( '/contact','contact');
Route::get("test/{user}",[Userscontroller::class,'loadtest']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
