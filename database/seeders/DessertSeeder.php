<?php

namespace Database\Seeders;

use App\Models\Dessert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DessertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dessert::create(["id" => 1, "id_category" => 1, "name" => "Pastel de chocolate", "description" => "Rico pastel de tres leches","id_person"=>1]);
        Dessert::create(["id" => 2, "id_category" => 1, "name" => "Pastel de fresa", "description" => "Galletas suaves con avena y pasas","id_person"=>2]);
        Dessert::create(["id" => 3, "id_category" => 2, "name" => "Galletas de avena", "description" => "Helado cremoso de vainilla artesanal","id_person"=>3]);
        Dessert::create(["id" => 4, "id_category" => 3, "name" => "Pay de limón", "description" => "Pay refrescante de limón con base de galleta","id_person"=>4]);
        Dessert::create(["id" => 5, "id_category" => 4, "name" => "Cupcakes de fresa", "description" => "Cupcakes decorados con crema de fresa","id_person"=>5]);
        Dessert::create(["id" => 6, "id_category" => 5, "name" => "Brownie clásico", "description" => "Brownie de chocolate oscuro, denso y delicioso","id_person"=>6]);
        Dessert::create(["id" => 7, "id_category" => 6, "name" => "Tarta de manzana", "description" => "arta con relleno de manzana y canela","id_person"=>7]);
        Dessert::create(["id" => 8, "id_category" => 7, "name" => "Donas glaseadas", "description" => "Donas esponjosas con glaseado de azúcar","id_person"=>8]);
        Dessert::create(["id" => 9, "id_category" => 8, "name" => "Muffins de arándanos", "description" => "Muffins con arándanos frescos","id_person"=>9]);
        Dessert::create(["id" => 10, "id_category" => 9, "name" => "Churros tradicionales", "description" => "Churros espolvoreados con azúcar y canela","id_person"=>10]);
        Dessert::create(["id" => 11, "id_category" => 10, "name" => "Macarons variados", "description" => "Macarons de diferentes sabores y colores","id_person"=>11]);
        Dessert::create(["id" => 12, "id_category" => 11, "name" => "Cheesecake de frambuesa", "description" => "Cheesecake cremoso con topping de frambuesa","id_person"=>12]);
        Dessert::create(["id" => 13, "id_category" => 12, "name" => "Crepas de Nutella", "description" => "Crepas rellenas de Nutella con fresas","id_person"=>13]);
        Dessert::create(["id" => 14, "id_category" => 13, "name" => "Flan casero", "description" => "Flan con caramelo hecho en casa","id_person"=>14]);
    }
}
