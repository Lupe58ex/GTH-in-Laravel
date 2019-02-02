<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Relative;
use App\Http\Resource\RelativeResource;

class RelativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relative = Relative::paginate(15);
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
        $relative = Relative::create([
            'name'=>$request->name,
            'lastname_mother'=>$request->lastname_mother,
            'lastname_father'=>$request->lastname_father,
            'gender'=>$request->gender,
            'birthdate'=>$request->birthdate,
            'cellphone'=>$request->cellphone,
            'house_via_id'=>ViaResource::collection($request->house_via),
            'house_address'=>$request->house_address,
            'job_via_id'=>ViaResource::collection($request->job_via),
            'job_address'=>$request->job_address,
            'place_job'=>$request->place_job,
            'dni'=>$request->DNI,
            'full_age'=>$request->full_age,
            'address_file'=>$request->address_file,
            'is_student'=>$request->is_student,
            'reference'=>$request->reference,
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
        $relative = Relative::findOrFail($id);
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
        //
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
