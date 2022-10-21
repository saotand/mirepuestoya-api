<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\StoreCarModelRequest;
use App\Http\Requests\API\UpdateCarModelRequest;
use App\Http\Resources\API\CarModelResourceSelect;
use App\Models\CarBrand;
use App\Models\CarModel;

class CarModelController extends Controller
{

    /**
     * Display a listing of the resource. (PUBLIC)
     *
     * @return \Illuminate\Http\Response
     */
    public function index_home(CarBrand $brand){
        $brand_id = $brand->id;
        $models = CarModelResourceSelect::Collection(CarModel::where('car_brands_id',$brand_id)->orderBy('counter',"desc")->get());
        if(!count($models)){
            $models = [['value' => 0, 'text' => 'Selecciona una marca con modelos']];
        }

        return response(['message'=>'OK','data'=>$models],200,);
    }


    /**
     * Display a listing of the resource. (Admin)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        //
        return response();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\API\StoreCarModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarModelRequest $request)
    {
        //
        return response();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\API\UpdateCarModelRequest  $request
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarModelRequest $request, CarModel $carModel)
    {
        //
        return response();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModel $carModel)
    {
        //
        return response();

    }
}