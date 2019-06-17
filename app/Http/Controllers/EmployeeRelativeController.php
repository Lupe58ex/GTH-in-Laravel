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
            'employee_id'=>$request->employee_id,
            'employee1_id'=>$request->employee1_id,
            'relative_id'=>$request->relative_id,
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
        //$employeeRelative = EmployeeRelative::where('id',$request->id)->update($request->only(''));
        $employeeRelative = EmployeeRelative::where('id',$request->id)->update($request->all());
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
