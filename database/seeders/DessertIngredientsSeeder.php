<?php

namespace Database\Seeders;

use App\Models\DessertIngredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DessertIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DessertIngredient::create(["id_ingredient" => 1, "id_dessert" => 1, "quantity" => 200.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 2, "id_dessert" => 1, "quantity" => 150.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 3, "id_dessert" => 1, "quantity" => 100.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 6, "id_dessert" => 1, "quantity" => 50.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 4, "id_dessert" => 1, "quantity" => 3.00, "unit_of_measure" => 'pzas']);
        DessertIngredient::create(["id_ingredient" => 1, "id_dessert" => 2, "quantity" => 180.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 14, "id_dessert" => 2, "quantity" => 100.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 7, "id_dessert" => 2, "quantity" => 1.00, "unit_of_measure" => 'cda']);
        DessertIngredient::create(["id_ingredient" => 8, "id_dessert" => 7, "quantity" => 1.00, "unit_of_measure" => 'cda']);
        DessertIngredient::create(["id_ingredient" => 15, "id_dessert" => 7, "quantity" => 50.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 5, "id_dessert" => 4, "quantity" => 250.00, "unit_of_measure" => 'ml']);
        DessertIngredient::create(["id_ingredient" => 9, "id_dessert" => 4, "quantity" => 1.00, "unit_of_measure" => 'cda']);
        DessertIngredient::create(["id_ingredient" => 12, "id_dessert" => 4, "quantity" => 150.00, "unit_of_measure" => 'ml']);
        DessertIngredient::create(["id_ingredient" => 16, "id_dessert" => 6, "quantity" => 2.00, "unit_of_measure" => 'cda']);
        DessertIngredient::create(["id_ingredient" => 10, "id_dessert" => 6, "quantity" => 30.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 11, "id_dessert" => 5, "quantity" => 100.00, "unit_of_measure" => 'ml']);
        DessertIngredient::create(["id_ingredient" => 17, "id_dessert" => 13, "quantity" => 20.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 18, "id_dessert" => 12, "quantity" => 200.00, "unit_of_measure" => 'g']);
        DessertIngredient::create(["id_ingredient" => 19, "id_dessert" => 14, "quantity" => 1.00, "unit_of_measure" => 'sobres']);
        DessertIngredient::create(["id_ingredient" => 13, "id_dessert" => 14, "quantity" => 50.00, "unit_of_measure" => 'ml']);

    }
}
