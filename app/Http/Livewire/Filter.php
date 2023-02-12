<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Game;
use Livewire\Component;
use Livewire\WithPagination;

class Filter extends Component
{
    use WithPagination;

    public $categories;
    public $pegis;

    public $categoryFilter;
    public $ageFilter;
    public $formatFilter;
    public $searchFilter;

    public function mount() 
    {   
        $this->categories = Category::all();
        $this->pegis = [18,16,12,7,3];
    }

    public function render()
    {
        $pegis="";
        $categories = "";
        $games = Game::query()->when($this->searchFilter, function($query) {
            $query->where('name', 'like', '%'.trim(preg_replace('!\s+!', ' ', $this->searchFilter)).'%');
        })->when($this->categoryFilter, function($query) {
            $query->where('category', $this->categoryFilter);
        })->when($this->ageFilter, function($query) {
            $query->where('pegi', "<=" ,$this->ageFilter);
        })->when($this->formatFilter, function($query) {
            if($this->formatFilter == "fisico")
                $query->whereNotNull('stock');
            else if ($this->formatFilter == "digital") {
                $query->whereNull('stock');
            }
        })->with('categories')->paginate(6);
        return view('livewire.filter', compact('games', 'categories', 'pegis'));
    }
}
