<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CentralRisk;
use App\Http\Resources\CentralRiskResource;

class CentralRiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centralRisk = CentralRisk::paginate(15);
        return $centralRisk;
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
        $centralRisk = CentralRisk::create([
            'description'=>$request->description,
            'file'=>$request->file,
            'employee_id'=>$request->employee_id,
            'user_id'=>$request->user_id,
            'expedition_date'=>$request->expedition_date,
            'expiration_date'=>$request->expiration_date,
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
        $centralRisk = CentralRisk::findOrFail($id);
        return $centralRisk;
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
        //$centralRisk = CentralRisk::where('id', $request->id)->update($request->only('name'));   
        $centralRisk = CentralRisk::where('id', $request->id)->update($request->all());   
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
