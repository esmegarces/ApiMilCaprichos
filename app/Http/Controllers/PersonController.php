<?php

namespace App\Http\Controllers;

use App\Models\Person;
use DB;
use Illuminate\Http\Request;
use Validator;

class PersonController extends Controller
{
    //Obtenemos todos los detalles de los usuarios 
    public function mostrar()
    {
        //Obteniendo toda la información del modelo DetallesPostre
        $users = Person::get();


        // Validar si el arreglo esta vacío 
        if (count($users) <= 0) {
            return response()->json([
                'Mensaje' => 'No se han encontrado los users'
            ], 404);
        }

        return response()->json([
            'Mensaje' => 'users encontrados',
            'users' => $users
        ], 200);
    }

    //Agregar una persona

    public function addPerson(Request $request)
    {
        // Agregar un validador para validar los datos que se reciben
        $validator = Validator::make($request->all(), [
            'NAME' => 'required|string|max:40',
            'LASTNAME' => 'required|string|max:40',
            'SECOND_LASTNAME' => 'required|string|max:40',
            'BIRTHDATE' => 'required|date', // Cambiado a tipo 'date'
            'GENDER' => 'required|string|max:10', // Ajustado a un valor más razonable
            'EMAIL' => 'required|email|max:40', // Valida unicidad de email
            'password' => 'required|string|min:8|max:40' // Mínimo de seguridad
        ]);
    
        // Si el validador falla, se envía un mensaje de error
        if ($validator->fails()) {
            return response()->json([
                'Mensaje' => 'Error en la validación de los datos',
                'Errores' => $validator->errors()
            ], 400);
        }
    
        // Inicializar la transacción para registrar los datos de la persona
        DB::beginTransaction();
    
        try {
            // Crear la nueva instancia de Person
            $person = new Person();
            $person->NAME = $request->NAME;
            $person->LASTNAME = $request->LASTNAME;
            $person->SECOND_LASTNAME = $request->SECOND_LASTNAME;
            $person->BIRTHDATE = $request->BIRTHDATE;
            $person->GENDER = $request->GENDER;
            $person->EMAIL = $request->EMAIL;
            $person->password = bcrypt($request->password); // Hashea la contraseña
            $person->save();
    
            // Confirmar la transacción
            DB::commit();
    
            return response()->json([
                'Mensaje' => 'Persona registrada exitosamente',
                'Persona' => $person
            ], 201);
    
        } catch (\Exception $e) {
            // Revertir la transacción en caso de error
            DB::rollBack();
            return response()->json([
                'Mensaje' => 'Error al registrar la persona',
                'Error' => $e->getMessage()
            ], 500);
        }
    }
    

}
