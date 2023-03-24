<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->category_name ='Beginner';
        $category->save();

        $category = new Category();
        $category->category_name ='Intermediate';
        $category->save();

        $category = new Category();
        $category->category_name ='Advanced';
        $category->save();

        $category = new Category();
        $category->category_name ='Expert';
        $category->save();
    }
}
