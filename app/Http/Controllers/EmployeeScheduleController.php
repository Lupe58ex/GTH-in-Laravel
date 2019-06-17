<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EmployeeSchedule;
use App\Employee;
use App\Schedule;
use App\Http\Resources\ScheduleResource;
use SebastianBergmann\Environment\Console;

class EmployeeScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeSchedule = EmployeeSchedule::pagination(15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all()->where('enable',true);
        $morningSchedules = Schedule::all()->where('enable',true)->where('turn','M');
        $afternoonSchedules = Schedule::all()->where('enable',true)->where('turn','T');

        //dd(date('H', strtotime($schedules[0]->start_hour)));
        //dd(strtotime($schedules->start_hour),);
        return view('employee_schedules.create ',compact('employees','morningSchedules','afternoonSchedules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        /*for($i=0; $i<=count($request); $i++) {
            $object = (object) $request[$i];
            EmployeeSchedule::create(
                [
                    'employee_id'=>$object->employee_id,
                    'schedule_id'=>$object->schedule_id,
                    'day'=>$object->day
                ]
                );
        }   */
        //foreach ($request->element as $element) {
            EmployeeSchedule::create(
                [
                    'employee_id'=>$request->employee_id,
                    'schedule_id'=>$request->schedule_id,
                    'day'=>$request->day
                ]
                );
            //}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employeeSchedule = EmployeeSchedule::findOrFail($id);
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
        //$employeeSchedule = EmployeeSchedule::where('id',$request->id)->update($request->only(''));
        $employeeSchedule = EmployeeSchedule::where('id',$request->id)->update($request->all());
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
