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
    'as' => 'admin::news::',
    'middleware' => ['auth']
], function () {
Route::get('/', [\App\Http\Controllers\Admin\NewsController::class, 'index'])
        -> name ("index");

Route::get('/create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])
    -> name("create");

Route::get('/update/{news}',  [\App\Http\Controllers\Admin\NewsController::class, 'update'])
    ->where('news', '[0,9]+')
    -> name("update");

    Route::get('/delete/{id}',  [\App\Http\Controllers\Admin\NewsController::class, 'delete'])
        ->where('id', '[0,9]+')
        -> name("delete");

    Route::post('/save',  [\App\Http\Controllers\Admin\NewsController::class, 'save'])
        -> name("save");
});

//NewsCard________________

Route::get('/news/card/{news}', [\App\Http\Controllers\Admin\NewsCatController::class, 'card'])
    ->where('news', '[0-9]+')
    ->name("news::card");


//DB
Route::get('/db', [\App\Http\Controllers\DbController::class, 'index']);


Route::get( '/lang/{lang}', [\App\Http\Controllers\LangController::class, 'index'])
    ->where('lang', 'w+')
    ->name('lang')
    ->middleware('lang');

Auth::routes(['register'=> false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::match(['get','post'], '/admin/profile',['\App\Http\Controllers\Admin\ProfileController', 'update'])
    ->name('admin:profile')
    ->middleware('auth');
