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


Route::get('news/category', [\App\Http\Controllers\Admin\NewsCatController::class, 'index'])
    -> name("news::category");

Route::get('/news/category/{category_id}', [\App\Http\Controllers\Admin\NewsCatController::class, 'list'])
    -> where('category_id', '[0-9]+')
    -> name("news::list");

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

Route::get('update',  [\App\Http\Controllers\Admin\NewsController::class, 'update'])
    -> name("update");

    Route::get('delete',  [\App\Http\Controllers\Admin\NewsController::class, 'delete'])
        -> name("delete");

    Route::get('save',  [\App\Http\Controllers\Admin\NewsController::class, 'save'])
        -> name("save");
});

//NewsCard________________

Route::get('/news/card/{news}', [\App\Http\Controllers\Admin\NewsCatController::class, 'card'])
    ->where('news', '[0-9]+')
    ->name("news::card");


//DB
Route::get('/db', [\App\Http\Controllers\DbController::class, 'index']);


