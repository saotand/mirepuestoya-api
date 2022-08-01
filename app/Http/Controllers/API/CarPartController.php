<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CarPart;
use App\Http\Requests\StoreCarPartRequest;
use App\Http\Requests\UpdateCarPartRequest;

class CarPartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarPart  $carPart
     * @return \Illuminate\Http\Response
     */
    public function show(CarPart $carPart)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarPartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarPartRequest $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarPartRequest  $request
     * @param  \App\Models\CarPart  $carPart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarPartRequest $request, CarPart $carPart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarPart  $carPart
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarPart $carPart)
    {
        //
    }
}