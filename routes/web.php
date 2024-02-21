<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Person\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => view('welcome'));
Route::get('/{any}',\App\Http\Controllers\Person\IndexController::class)->where('any', '.*');





//Route::get('/{any}', [IndexController::class, 'index'])->where('any', '.*');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
