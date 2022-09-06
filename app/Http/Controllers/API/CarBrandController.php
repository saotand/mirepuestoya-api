<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarBrandRequest;
use App\Http\Requests\UpdateCarBrandRequest;
use App\Http\Resources\CarBrandResource;
use App\Http\Resources\CarBrandResourceSelect;
use App\Models\CarBrand;



class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // Index para formulario home
    public function index_home()
    {
        $bransForSelect = CarBrandResourceSelect::collection(CarBrand::where('active',true)->orderBy('counter',"desc")->get());
        return $bransForSelect;
    }

    // index para Admin
    public function index()
    {
        $allbrands = CarBrandResource::collection(CarBrand::all()->sortBy('id',0,false));
        return $allbrands;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarBrand  $carBrand
     * @return \Illuminate\Http\Response
     */
    public function show(CarBrand $carbrand)
    {
        $brand = $carbrand;
        return response([
            'message' => 'OK',
            'data'=> $brand
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarBrandRequest $request)
    {
        /*
        CarBrand::create($request->all());
        return response(['message' => "Marca Guardada"]);
        */
        return new CarBrandResource(CarBrand::create($request->all()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarBrandRequest  $request
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
