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

Route::get('/greeting', [\App\Http\Controllers\GreetingController::class, 'index'])
    -> name('home');


Route::get('news/category', [\App\Http\Controllers\Admin\NewsCatController::class, 'test'])
    -> name("news::category");

//Route::match(['get','post'],'admin/news/create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])
   // -> name("admin::news::create");

//NewsController_________________________________

Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::'
], function () {
Route::get('index', [\App\Http\Controllers\Admin\NewsController::class, 'index'])
        -> name ("index");

Route::post('create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])
    -> name("create");

Route::get('new',  [\App\Http\Controllers\Admin\NewsController::class, 'new'])
    -> name("new");
});

//NewsCard________________

Route::get('/news/card/{id}', [\App\Http\Controllers\Admin\NewsController::class, 'card']);

