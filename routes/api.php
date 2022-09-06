<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CarBrandController;
use App\Http\Controllers\API\CarModelController;
use App\Http\Controllers\API\CarFamilyPartController;

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
Route::post('logout', [AuthController::class , 'salida'])->middleware('auth:sanctum');


// Rutas para formualrio de inicio (home)

    // Rutas para uso de formulario (Publico)


    Route::get('carbrand', [CarBrandController::class,'index_home']);
    Route::get('carmodel/{brand}', [CarModelController::class,'index_home']);


// Grupo de Rutas con Token
Route::group(['middleware'=> ['auth:sanctum']], function (){

    // Marcas
    Route::apiResource('admin/brand',CarBrandController::class);

    // Modelos
    Route::apiResource('admin/model',CarModelController::class);

    // Familia de partes
    Route::apiResource('admin/familypart',CarFamilyPartController::class);

    // Partes
    Route::apiResource('admin/part',CarBrandController::class);




/*
    Route::get('admin/carbrands',[CarBrandController::class,'index']);
    Route::post('admin/carbrands',[CarBrandController::class,'store']);
    Route::get('admin/carbrands/{carbrand}',[CarBrandController::class,'show']);
    Route::put('admin/carbrands/{carbrand}',[CarBrandController::class,'update']);
    Route::delete('admin/carbrands/{carbrand}',[CarBrandController::class,'destroy']);
*/

});

// Default
Route::get('/',function (){
    return response()->json([
        'message'=> 'ready'
    ]);
});
