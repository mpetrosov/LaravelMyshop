<?php

namespace App\Http\Controllers;

use App\Car_brand;
use App\Bike_brand;
use App\Laptop_brand;
use App\Tv_brand;
use Illuminate\Http\Request;

class Product_brandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $car_brands = Car_brand::all();
         $bike_brands = Bike_brand::all();
         $laptop_brands = Laptop_brand::all();
         $tv_brands = Tv_brand::all();     

        return view('main', compact('car_brands', 'bike_brands','laptop_brands','tv_brands'));
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
     * @param  \App\Product_brand  $product_brand
     * @return \Illuminate\Http\Response
     */
    public function show(Product_brand $product_brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_brand  $product_brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_brand $product_brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_brand  $product_brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_brand $product_brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_brand  $product_brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_brand $product_brand)
    {
        //
    }
}
