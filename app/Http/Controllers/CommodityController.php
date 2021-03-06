<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecommodityRequest;
use App\Http\Requests\UpdatecommodityRequest;
use App\Models\commodity;

class CommodityController extends Controller
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
     * @param  \App\Http\Requests\StorecommodityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecommodityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function show(commodity $commodity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function edit(commodity $commodity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecommodityRequest  $request
     * @param  \App\Models\commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecommodityRequest $request, commodity $commodity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function destroy(commodity $commodity)
    {
        //
    }
}
