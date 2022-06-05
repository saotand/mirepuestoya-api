<?php

namespace App\Http\Controllers;

use App\Models\CarPartImages;
use App\Http\Requests\StoreCarPartImagesRequest;
use App\Http\Requests\UpdateCarPartImagesRequest;

class CarPartImagesController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarPartImagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarPartImagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarPartImages  $carPartImages
     * @return \Illuminate\Http\Response
     */
    public function show(CarPartImages $carPartImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarPartImages  $carPartImages
     * @return \Illuminate\Http\Response
     */
    public function edit(CarPartImages $carPartImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarPartImagesRequest  $request
     * @param  \App\Models\CarPartImages  $carPartImages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarPartImagesRequest $request, CarPartImages $carPartImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarPartImages  $carPartImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarPartImages $carPartImages)
    {
        //
    }
}
