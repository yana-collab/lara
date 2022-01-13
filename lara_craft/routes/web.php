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

Route::get('/greeting', function () {
    return '<h1>Hello dude </h1>';
});

Route::get('/button', function () {
    return '<button> click </button>';
});

Route::get('/form', function () {
    return '<form>
            <input placeholder="name"> </input>
            </form>';
});

