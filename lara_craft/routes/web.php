<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', [\App\Http\Controllers\GreetingController::class, 'make']);




Route::get('/category', [\App\Http\Controllers\Admin\NewsCatController::class,'index']);
Route::get('/news/card/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'card']);

