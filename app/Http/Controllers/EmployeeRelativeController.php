<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EmployeeRelative;
use App\Http\Resource\EmployeeRelativeResource;

class EmployeeRelativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeRelative =EmployeeRelative::pagination(15);
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
        $employeeRelative = EmployeeRelative::create([
            'relationship'=>$request->relationship,
            'observation'=>$request->observation,
            'bail_letter'=>$request->bail_letter,
            'guarantor'=>$request->guarantor,
            'droped'=>$request->droped,
            'is_student'=>$request->is_student,
            'employee_id'=>EmployeeResource::collection($request->employee),
            'employee1_id'=>EmployeeResource::collection($request->employee1),
            'relative_id'=>RelativeResource::collection($request->relative),
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
        $employeeRelative = EmployeeRelative::findOrFail($id);
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
