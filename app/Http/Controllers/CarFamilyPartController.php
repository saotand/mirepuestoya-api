<?php

namespace App\Http\Controllers;

use App\Models\CarFamilyPart;
use App\Http\Requests\StoreCarFamilyPartRequest;
use App\Http\Requests\UpdateCarFamilyPartRequest;

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
     * @param  \App\Http\Requests\StoreCarFamilyPartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarFamilyPartRequest $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarFamilyPart  $carFamilyPart
     * @return \Illuminate\Http\Response
     */
    public function edit(CarFamilyPart $carFamilyPart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarFamilyPartRequest  $request
     * @param  \App\Models\CarFamilyPart  $carFamilyPart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarFamilyPartRequest $request, CarFamilyPart $carFamilyPart)
    {
        //
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
    }
}
