<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarBrandController;
use App\Models\CarBrand;


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

    // CarBrands
    Route::get('carbrands', [CarBrandController::class,'index_home']);

// Grupo de Rutas con Token
Route::group(['middleware'=> ['auth:sanctum']], function (){

    Route::get('admin/carbrands',[CarBrandController::class,'index']);
    Route::post('admin/carbrands',[CarBrandController::class,'store']);
    Route::get('admin/carbrands/{carbrand}',[CarBrandController::class,'show']);
    Route::put('admin/carbrands/{carbrand}',[CarBrandController::class,'update']);
    Route::delete('admin/carbrands/{carbrand}',[CarBrandController::class,'destroy']);


});

// Default
Route::get('/',function (){
    return response()->json([
        'message'=> 'ready'
    ]);
});