<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartLine extends Component
{
    public $item;
    public $quantity;
    public $order_id;
    public $game_id;

    public function mount() {
        $this->quantity = $this->item->quantity;
        $this->order_id = $this->item->order_id;
        $this->game_id = $this->item->game_id;
    }

    public function updateCart() {
        if($this->quantity == 0) {
            $this->item->where('order_id', $this->order_id)->where('game_id', $this->game_id)->delete();
            return redirect()->route('cart');
        }
        $this->item->query()->when($this->quantity, function ($query) {
            $query->where('order_id', $this->order_id)->where('game_id', $this->game_id)->update(['quantity' => $this->quantity]);
        });
        return redirect()->route('cart');
    }

    public function deleteCart() {
        $this->item->query()->when($this->quantity, function ($query) {
            $query->where('order_id', $this->order_id)->where('game_id', $this->game_id)->delete();
        });
        return redirect()->route('cart');
    }

    public function render()
    {
        $quantity = '';
        return view('livewire.cart-line', compact('quantity'));
    }
}
