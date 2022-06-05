<?php

namespace App\Http\Controllers;

use App\Models\CarImages;
use App\Http\Requests\StoreCarImagesRequest;
use App\Http\Requests\UpdateCarImagesRequest;

class CarImagesController extends Controller
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
     * @param  \App\Http\Requests\StoreCarImagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarImagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarImages  $carImages
     * @return \Illuminate\Http\Response
     */
    public function show(CarImages $carImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarImages  $carImages
     * @return \Illuminate\Http\Response
     */
    public function edit(CarImages $carImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarImagesRequest  $request
     * @param  \App\Models\CarImages  $carImages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarImagesRequest $request, CarImages $carImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarImages  $carImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarImages $carImages)
    {
        //
    }
}
