<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        Category::create(["id" => 1, "name" => "Pastel"]);
        Category::create(["id" => 2, "name" => "Galletas"]);
        Category::create(["id" => 3, "name" => "Pay"]);
        Category::create(["id" => 4, "name" => "Cupcakes"]);
        Category::create(["id" => 5, "name" => "Brownies"]);
        Category::create(["id" => 6, "name" => "Tartas"]);
        Category::create(["id" => 7, "name" => "Donas"]);
        Category::create(["id" => 8, "name" => "Muffins"]);
        Category::create(["id" => 9, "name" => "Churros"]);
        Category::create(["id" => 10, "name" => "Macarons"]);
        Category::create(["id" => 11, "name" => "Cheesecake"]);
        Category::create(["id" => 12, "name" => "Crepas"]);
        Category::create(["id" => 13, "name" => "Flan"]);
    }
}
