<?php

namespace App\Http\Controllers;

use App\Car_model;
use Illuminate\Http\Request;

class Car_modelsController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car_models = Car_model::where('car_id', $id)->get();

        return view('cars', compact('car_models'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_model $car_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_model $car_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_model  $car_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_model $car_model)
    {
        //
    }
}
