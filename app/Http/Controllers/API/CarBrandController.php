<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\StoreCarBrandRequest;
use App\Http\Requests\API\UpdateCarBrandRequest;
use App\Http\Resources\API\CarBrandResource;
use App\Http\Resources\API\CarBrandResourceSelect;
use App\Models\CarBrand;

class CarBrandController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // Index para formulario home
    public function index_home(){
        $CarBrands = CarBrandResourceSelect::collection(CarBrand::where('active',true)->orderBy('counter',"desc")->get());
        return response(['message'=>'OK','data'=>$CarBrands],200);
    }

    // index para Admin
    public function index(){
        $allbrands = CarBrandResource::collection(CarBrand::all()->sortBy('id',0,false));
        return response(['message'=>'OK','data'=>$allbrands],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarBrand  $carBrand
     * @return \Illuminate\Http\Response
     */
    public function show(CarBrand $carbrand){
        $brand = $carbrand;
        return response(['message' => 'OK','data'=> $brand],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\API\StoreCarBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarBrandRequest $request){
        $CreatedCarBrand = new CarBrandResource(CarBrand::create($request->all()));
        return response(['message'=>'OK','data'=>$CreatedCarBrand],201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\API\UpdateCarBrandRequest  $request
     * @param  \App\Models\CarBrand  $carBrand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarBrandRequest $request, CarBrand $carbrand)
    {
        $carbrand->update($request->all());
        return response([
            'message' => 'Datos actualizados'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarBrand  $carBrand
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarBrand $carBrand, $request)
    {
        $brand = $carBrand->find($request);
        if($brand){
            $brand->delete();
        }else{
            return response(['message'=>false,'error' => 'No se encuentra la marca'],404);
        }
        return response([
            'message' => 'Marca Eliminada.',
            'data' => $brand
        ],200);
    }
}