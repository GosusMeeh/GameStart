<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categoriesJson = file_get_contents("database/seeders/categories.json");
        $categoriesArray = json_decode($categoriesJson, true);
        // var_dump($categoriesArray);
        foreach($categoriesArray as $category => $key) {
            $category = new Category();
            $category->name = $key['name'];
            $category->save();
        }
    }
}