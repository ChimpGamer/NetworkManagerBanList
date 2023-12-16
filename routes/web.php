<?php

use App\Http\Controllers\BansController;
use App\Http\Controllers\KicksController;
use App\Http\Controllers\MutesController;
use App\Http\Controllers\WarnsController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bans', [BansController::class, 'index'])->name('bans');
Route::get('/mutes', [MutesController::class, 'index'])->name('mutes');
Route::get('/kicks', [KicksController::class, 'index'])->name('kicks');
Route::get('/warns', [WarnsController::class, 'index'])->name('warns');
Route::view('/404', '404')->name('404');

Route::get('/player/{id}', [PlayerController::class, 'show']);
Route::get('/player/search/{username}', [PlayerController::class, 'search'])->name('search');
