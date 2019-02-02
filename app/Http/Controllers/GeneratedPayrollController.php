<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GeneratedPayroll;
use App\Http\Resource\GeneratedPayrollResource;

class GeneratedPayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generatedPayroll = GeneratedPayroll::pagination(15);
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
        $generatedPayroll = GeneratedPayroll::create([
            'month'=>$request->month,
            'year'=>$request->year,
            'employee_id'=>EmployeeResource::collection($request->employee),
            'real_salary'=>$request->real_salary,
            'payroll_salary'=>$request->payroll_salary,
            'quantity_consider'=>$request->quantity_consider,
            'household_allowance'=>$request->household_allowance,
            'role_bonus'=>$request->role_bonus,
            'bonus'=>$request->bonus,
            'commission'=>$request->commission,
            'holiday_bonus'=>$request->holiday_bonus,
            'salary_advance'=>$request->salary_advance,
            'discount'=>$request->discount,
            'permission'=>$request->permission,
            'license'=>$request->license,
            'tardiness'=>$request->tardiness,
            'onp'=>$request->onp,
            'pension_system_quantity'=>$request->pension_system_quantity,
            'essalud'=>$request->essalud,
            'business_quantity'=>$request->business_quantity,
            'employee_quantity'=>$request->employee_quantity,
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
        $generatedPayroll = GeneratedPayroll::findOrFail($id);
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
