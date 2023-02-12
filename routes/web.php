<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $games = (new GameController())->index()->sortByDesc('discount');
    return view('inicio', compact('games'));
})->name('inicio');
// Route::get('/', [GameController::class, 'index'])->name('game.index');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('cart', function () {
    return view('cart');
})->middleware('auth')->name('cart');

Route::controller(ProfileController::class)->middleware('auth')->group(function () {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
})->name('profile');
    
require __DIR__.'/auth.php';
