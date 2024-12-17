<?php

use App\Livewire\Bans;
use App\Livewire\Home;
use App\Livewire\Kicks;
use App\Livewire\Mutes;
use App\Livewire\ShowPlayer;
use App\Livewire\Warns;
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

Route::get('/', Home::class)->name('home');
Route::get('/bans', Bans::class)->name('bans');
Route::get('/mutes', Mutes::class)->name('mutes');
Route::get('/kicks', Kicks::class)->name('kicks');
Route::get('/warns', Warns::class)->name('warns');
Route::view('/404', '404')->name('404');

Route::get('/player/{id}', ShowPlayer::class)->name('player');
