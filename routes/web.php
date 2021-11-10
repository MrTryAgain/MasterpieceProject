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
/* ab hier new sites Try LOL */

Route::get('/playground1', function () {
    return view('playground1');
});

Route::get('/hiPage', function () {
    return view('hiPage');
});
    


Route::get('/messages', 'MessageController@showAll');

Route::get('/hiPage', 'HiPageController@showAll');

/* ab hier new sites Try LOL ende */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

