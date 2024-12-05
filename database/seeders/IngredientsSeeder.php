<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
Ingredient::create(["id"=>1,"name"=>"Harina"]);
Ingredient::create(["id"=>2,"name"=>"Azúcar"]);
Ingredient::create(["id"=>3,"name"=>"Mantequilla"]);
Ingredient::create(["id"=>4,"name"=>"Huevo"]);
Ingredient::create(["id"=>5,"name"=>"Leche"]);
Ingredient::create(["id"=>6,"name"=>"Chocolate"]);
Ingredient::create(["id"=>7,"name"=>"Vainilla"]);
Ingredient::create(["id"=>8,"name"=>"Canela"]);
Ingredient::create(["id"=>9,"name"=>"Polvo de hornear"]);
Ingredient::create(["id"=>10,"name"=>"Cocoa en polvo"]);
Ingredient::create(["id"=>11,"name"=>"Crema para batir"]);
Ingredient::create(["id"=>12,"name"=>"Leche condensada"]);
Ingredient::create(["id"=>13,"name"=>"Leche evaporada"]);
Ingredient::create(["id"=>14,"name"=>"Frutillas"]);
Ingredient::create(["id"=>15,"name"=>"Nueces"]);
Ingredient::create(["id"=>16,"name"=>"Miel"]);
Ingredient::create(["id"=>17,"name"=>"Coco rallado"]);
Ingredient::create(["id"=>18,"name"=>"Queso crema"]);
Ingredient::create(["id"=>19,"name"=>"Gelatina sin sabor"]);
Ingredient::create(["id"=>20,"name"=>"Mermelada"]);
    }
}
