<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Assistance;
use App\EmployeeSchedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeeScheduleResource;

class AssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $assistance = Assistance::pagination(15);
        return $assistance;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        $employeeWithSchedule = new EmployeeResource($employees);
        
        return response()->json([
            'employeeWithSchedule' => $employeeWithSchedule
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assistance=Assistance::create([
            'date'=>$request->date,
            'real_start_time'=>$request->real_start_time,
            'real_end_time'=>$request->real_end_time,
            'user_id'=>$request->user_id,
            'employee_schedule_id'=>$request->employee_schedule_id,
            'justification'=>$request->justification,
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
        $assistance = Assistance::findOrFail($id);

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
        //$assistance = Assistance::where('id', $request->id)->update($request->only('name'));   
        $assistance = Assistance::where('id', $request->id)->update($request->all());   
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
