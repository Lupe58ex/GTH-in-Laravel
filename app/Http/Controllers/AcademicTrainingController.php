<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AcademicTraining;
use App\Http\Resource\AcademicTrainingResource;

class AcademicTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicTraining = AcademicTraining::paginate(15);
        return $AcademicTraining;
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
        $academicTraining=AcademicTraining::Create([
            'description'=>$request->description,
            'institute'=>$request->insitute,
            'period'=>$request->period,
            'condition'=>$request->condition,
            'user_id'=>$request->user_id,
            'employee_id'=>$request->employee_id,
        ]);
        new AcademicTraining($academicTraining);
        return $academicTraining;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academicTraining=AcademicTraining::findOrFail($id);
        //new AcademicTraining($AcademicTraining);
        return $academicTraining;
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
        //$academicTraining = AcademicTraining::where('id', $request->id)->update($request->only('name'));   
        $academicTraining = AcademicTraining::where('id', $request->id)->update($request->all());   
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
