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
        $AcademicTraining::paginate(15);
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
        $AcademicTraining=AcademicTraining::Create([
            'description'=>$request->description,
            'institute'=>$request->insitute,
            'period'=>$request->period,
            'condition'=>$request->condition,
            'user_id'=>UserResource::collection($request->user),
            'employee_id'=>EmployeeResource::collection($request->employee),
        ]);
        new AcademicTraining($AcademicTraining);
        return $AcademicTraining;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $AcademicTraining=AcademicTraining::findOrFail($id);
        //new AcademicTraining($AcademicTraining);
        return $AcademicTraining;
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
