<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BonusDiscountCategory;
use App\Http\Resources\BonusDiscountCategoryResource;

class BonusDiscountCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bonusDiscountCategory = BonusDiscountCategory::paginate(15);
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
        $bonusDiscountCategory = BonusDiscountCategory::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'enable'=>$request->enable,
            'appears_in'=>$request->appears_in,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $bonusDiscountCategory =  BonusDiscountCategory::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$bonusDiscountCategory = BonusDiscountCategory::where('id', $request->id)->update($request->only('name'));   
        $bonusDiscountCategory = BonusDiscountCategory::where('id', $request->id)->update($request->all());   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
