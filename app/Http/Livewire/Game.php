<?php

namespace App\Http\Livewire;

use App\Http\Controllers\GameController;
use Livewire\Component;

class Game extends Component
{
    public $game = "";
    public $category = "";

    public function addToCart() {
        
    }

    public function render()
    {
        $game = "";
        $category = "";
        return view('livewire.game', compact('game', 'category'));
    }
}
