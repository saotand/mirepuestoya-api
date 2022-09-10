<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\StoreCarFamilyPartRequest;
use App\Http\Requests\API\UpdateCarFamilyPartRequest;
use App\Models\CarFamilyPart;

class CarFamilyPartController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * @param  \App\Models\CarFamilyPart  $carFamilyPart
     * @return \Illuminate\Http\Response
     */
    public function show(CarFamilyPart $carFamilyPart)
    {
        //
        return response();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\API\StoreCarFamilyPartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarFamilyPartRequest $request)
    {
        //
        return response();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\API\UpdateCarFamilyPartRequest  $request
     * @param  \App\Models\CarFamilyPart  $carFamilyPart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarFamilyPartRequest $request, CarFamilyPart $carFamilyPart)
    {
        //
        return response();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarFamilyPart  $carFamilyPart
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarFamilyPart $carFamilyPart)
    {
        //
        return response();

    }
}