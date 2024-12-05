<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CredentialsUserController;
use App\Http\Controllers\DessertController;
use App\Http\Controllers\DessertIngredientController;
use App\Http\Controllers\DetallesPostresController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

//Route prueba
Route::get('/saludo', function () {
    return response()->json([
        'Mensaje' => 'Saludo',
        'nombre' => 'Esmeralda'
    ], 200);
});

    //Route de login
    Route::post('/login', [CredentialsUserController::class, 'login']);
    //Route de agregar una persona
    Route::post('/agregar_persona', [PersonController::class, 'addPerson']);


    Route::middleware(['api', 'auth:sanctum'])->group(function () {
    // Route DetallesPostre
    Route::get('/detalles_postres', [DetallesPostresController::class, 'mostrar']);

    // Route Users
    Route::get('/info_users', [PersonController::class, 'mostrar']);

    // Route Categorias
    Route::get('/categories', [CategoryController::class, 'mostrar']);

    // Route Postres
    Route::get('/dessert', [DessertController::class, 'mostrar']);

    //Route Ingredients
    Route::get('/ingredients', [IngredientsController::class, 'mostrar']);

    //Route DessertIngredient
    Route::get('/dessert_ingredients', [DessertIngredientController::class, 'mostrar']);

    //Route de  Agregar un postre
    Route::post('/agregar_postre', [DessertController::class, 'addDessert']);

    //Route de actualizar un postre
    Route::put('/postres/{dessertid}', [DessertController::class, 'update']);

    //Route de eliminar un postre
    Route::delete('/postres/{dessertid}', [DessertController::class, 'delete']);

    //Route para buscar un postre en especifico por su ID

    Route::get('/postre/{dessertid}', [DessertController::class, 'getdessert']);

    //Route de filtrar postres por categoria
    Route::get('/postres_categoria/{categoryid}', [DessertController::class, 'filter']);
});