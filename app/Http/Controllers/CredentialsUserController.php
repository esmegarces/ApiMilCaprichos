<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;

class CredentialsUserController extends Controller
{
    //Metodo de login
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'EMAIL' => 'required|email|max:25',
            'password' => 'required|string|max:12'
        ]);

        //Si el validador falla, se envía un mensaje de error
        if ($validator->fails()) {
            return response()->json([
                'Mensaje' => 'Error en la validación de los datos',
                'code' => 400,
                'Errores' => $validator->errors()->all()
            ], 400);
        }

        if (!Auth::attempt($request->only('EMAIL', 'password'))) {
            return response()->json([
                'status' => 401,
                'Mensaje' => 'Usuario o contraseña incorrectos!',
            ], 401);
        }

        $user = Person::where('EMAIL', $request->EMAIL)->first();

        return response()->json([
            'Mensaje' => 'Inicio de sesión exitoso',
            'code' => 200,
            'id_person' => $user->ID,
            'token' => $user->createToken('API TOKEN')->plainTextToken
        ], 200);


    }
}
