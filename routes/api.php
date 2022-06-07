<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

// Registro de usuarios
Route::post('register', [AuthController::class , 'registro']);

// Logueo de Usuarios
Route::post('login', [AuthController::class , 'acceso']);

// Logout de Usuarios
Route::middleware('auth:sanctum')->post('logout', [AuthController::class , 'salida']);

// Grupo de Rutas con Token
Route::group(['middleware'=> ['auth:sanctum']], function (){

});

// Default
Route::get('/',function (){
    return response()->json([
        'message'=> 'ready'
    ]);
});
