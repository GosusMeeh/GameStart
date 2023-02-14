<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Item extends Component
{
    public $orderItem; 

    public function render()
    {
        return view('livewire.item');
    }
}
