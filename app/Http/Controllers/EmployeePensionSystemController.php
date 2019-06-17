<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\EmployeePensionSystem;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeListResource;
use App\Http\Resource\EmployeePensionSystemResource;
use App\PensionSystem;

class EmployeePensionSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeePensionSystem = EmployeePensionSystem::paginate(15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Employee::all();
        $employees = New EmployeeListResource($employee);
        $pensionSystems = PensionSystem::all();
        return view('employee_pensionsystems.create', compact('employees','pensionSystems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employeePensionSystem = EmployeePensionSystem::create([
            'actual'=>$request->actual,
            'comission_type'=>$request->comission_type,
            'employee_id'=>$request->employee_id,
            'pension_system_id'=>$request->pension_system,
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
        $employeePensionSystem = EmployeePensionSystem::findOrFail();
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
        //$employeePensionSystem = EmployeePensionSystem::where('id',$request->id)->update($request->only(''));
        $employeePensionSystem = EmployeePensionSystem::where('id',$request->id)->update($request->all());
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
