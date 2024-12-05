<?php

namespace Database\Seeders;

use App\Models\Person;
use Hash;
use Illuminate\Database\Seeder;
use Str;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Person::create(["id" => 1, "name" => "Esmeralda", "lastname" => "Garces", "second_lastname" => "Rosas", "birthdate" => "2003-03-10", "gender" => "Femenino", "EMAIL" => "jmgarces810@gmail.com", "password" => Hash::make("123456"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 2, "name" => "Humberto", "lastname" => "De La Cruz", "second_lastname" => "Domínguez", "birthdate" => "2002-12-13", "gender" => "Masculino", "EMAIL" => "DelaC69@gmail.com", "password" => Hash::make("h13h12h2002"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 3, "name" => "Victoria", "lastname" => "Gonzalez", "second_lastname" => "Garces", "birthdate" => "2002-12-18", "gender" => "Femenino", "EMAIL" => "aris89@gmail.com", "password" => Hash::make("Aris18122003"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 4, "name" => "Roberto", "lastname" => "Salazar", "second_lastname" => "Méndez", "birthdate" => "2000-11-09", "gender" => "Masculino", "EMAIL" => "rsalazar2020@gmail.com", "password" => Hash::make("Robsal1109"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 5, "name" => "Carmen", "lastname" => "Gómez", "second_lastname" => "Jiménez", "birthdate" => "1987-03-14", "gender" => "Femenino", "EMAIL" => "cgjim87@gmail.com", "password" => Hash::make("Cgomez143"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 6, "name" => "Alejandro", "lastname" => "Soto", "second_lastname" => "Navarro", "birthdate" => "2001-08-27", "gender" => "Masculino", "EMAIL" => "nava01@gmail.com", "password" => Hash::make("AleX2708"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 7, "name" => "Sara", "lastname" => "Vargas", "second_lastname" => "Pérez", "birthdate" => "1995-02-05", "gender" => "Femenino", "EMAIL" => "svperez95@gmail.com", "password" => Hash::make("saraFeb95"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 8, "name" => "Jorge", "lastname" => "Castillo", "second_lastname" => "Flores", "birthdate" => "1992-06-16", "gender" => "Masculin", "EMAIL" => "jorge_cf92@gmail.com", "password" => Hash::make("CastJ16292"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 9, "name" => "Paola", "lastname" => "López", "second_lastname" => "Martínez", "birthdate" => "1990-10-19", "gender" => "Femenino", "EMAIL" => "plm1990@gmail.com", "password" => Hash::make("PaoLop1910"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 10, "name" => "Carlos", "lastname" => "Ramírez", "second_lastname" => "García", "birthdate" => "1998-04-01", "gender" => "Masculino", "EMAIL" => "carlos_gar98@gmail.com", "password" => Hash::make("CrgApril01"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 11, "name" => "Elena", "lastname" => "Romero", "second_lastname" => "Vega", "birthdate" => "1989-12-30", "gender" => "Femenino", "EMAIL" => "elenavega89@gmail.com", "password" => Hash::make("Elena30Dec"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 12, "name" => "Fernando", "lastname" => "Díaz", "second_lastname" => "Reyes", "birthdate" => "1994-07-08", "gender" => "Masculino", "EMAIL" => "f_diaz94@gmail.com", "password" => Hash::make("FDiaz0807"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 13, "name" => "Lucía", "lastname" => "Martínez", "second_lastname" => "Ortiz", "birthdate" => "1999-05-22", "gender" => "Femenino", "EMAIL" => "mo1999@gmail.com", "password" => Hash::make("lucy22may"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 14, "name" => "Mariana", "lastname" => "Silva", "second_lastname" => "Hernández", "birthdate" => "1996-09-15", "gender" => "Femenino", "EMAIL" => "mariana_sh96@gmail.com", "password" => Hash::make("MariSH1596"),'remember_token'=>Str::random(10)]);
        // Person::create(["id" => 15, "name" => "Andrés", "lastname" => "Pérez", "second_lastname" => "Ortega", "birthdate" => "1993-11-22", "gender" => "Masculino", "EMAIL" => "perez93@gmail.com", "password" => Hash::make("Andres2211"),'remember_token'=>Str::random(10)]);

        Person::create(["id" => 16, "name" => "Alex", "lastname" => "Lopez", "second_lastname" => "Garces", "birthdate" => "2017-11-17", "gender" => "Masculino", "EMAIL" => "alex@gmail.com", "password" => Hash::make("Alex123"),'remember_token'=>Str::random(10)]);

        

    }
}
