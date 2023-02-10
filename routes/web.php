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

    return view('inicio');
})->name('inicio');
// Route::get('/', [GameController::class, 'index'])->name('game.index');

Route::get('shop', function () {
    return view('tienda');
})->name('tienda');

Route::get('test', function () {
    return view('layouts.test');
})->name('test');

Route::get('chart', function () {
    return view('chart');
})->name('chart');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    
require __DIR__.'/auth.php';
