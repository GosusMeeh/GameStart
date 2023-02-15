<?php

use App\Models\Game;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    $games = (new GameController())->index()->sortByDesc('discount')->take(8);
    return view('inicio', compact('games'));
})->name('inicio');
// Route::get('/', [GameController::class, 'index'])->name('game.index');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('game/{id}', function ($id) {
    $game = Game::findOrFail($id);
    return view('description', compact('game'));
})->name('game');

Route::get('cart', function() {
    return view('cart');
})->middleware('auth')->name('cart');

Route::get('pay/checkout', function() {
    return view('livewire.checkout');
})->middleware('auth')->name('checkout');

Route::get('pay', function() {
    $currentOrder = Auth::user()->orders->where('paid', 0)->last();
    if ($currentOrder->totalPrice == 0) {
        return redirect()->route('inicio');
    }
    $oc = new OrderController();
    foreach($currentOrder->items as $item) {
        $item->game->where('id', $item->game_id)->update(['stock' => $item->game->stock - $item->quantity]);
    }
    $oc->update(Auth::user()->orders->where('paid', 0)->last());

    $oc->store(Auth::user());

    return redirect()->route('inicio');
})->middleware('auth')->name('pay');

Route::get('history', function() {
    $pedidos = Auth::user()->orders->where('paid', true);
    return view('history', compact('pedidos'));
})->middleware('auth')->name('history');

Route::controller(ProfileController::class)->middleware('auth')->group(function () {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
})->name('profile');
    
require __DIR__.'/auth.php';
