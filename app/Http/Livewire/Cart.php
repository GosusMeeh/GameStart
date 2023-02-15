<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $currentOrder;
    public $total;
    
    public function mount() {
        $this->total = 0;
        foreach($this->currentOrder->items as $item) {
            $this->total += $item->quantity*$item->game->price*(1-$item->game->discount/100);
        }
    } 

    public function makeOrder() {
        $this->currentOrder->query()->when($this->total, function($query) {
            $query->where('id', $this->currentOrder->id)->update(['totalPrice' => $this->total]);
        });
        return redirect()->route('checkout');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
