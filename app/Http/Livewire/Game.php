<?php

namespace App\Http\Livewire;

use App\Models\OrderItem;
use Livewire\Component;

class Game extends Component
{
    public $game;
    public $currentOrder;

    public function addToCart() {
        $item = OrderItem::firstOrCreate(['order_id' => $this->currentOrder->id, 'game_id' => $this->game->id]);
        if($item->quantity < $item->game->stock || $item->game->stock == null)
            $item->where('order_id',  $this->currentOrder->id)->where('game_id', $this->game->id)->update(['quantity' => $item->quantity+1]);
        return redirect()->route('cart');
    }

    public function render()
    {
        $game = "";
        return view('livewire.game', compact('game'));
    }
}
