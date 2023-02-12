<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $gameJson = file_get_contents("database/seeders/Games.json");
        $gameArray = json_decode($gameJson, true);
        // var_dump($gameArray);
        foreach($gameArray as $producto => $key) {
            $game = new Game();
            $game->name = $key['name'];
            $game->price = $key['price'];
            $game->discount = $key['discount'];
            $game->image = $key['img'];
            $game->pegi = $key['pegi'];
            $game->category = $key['category'];
            $game->stock = $key['stock'];
            $game->save();
        }
    }
}