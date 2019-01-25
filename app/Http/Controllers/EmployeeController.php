<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        Employee::create([
            'name'=>$request->name,
            'lastname_father'=>$request->lastname_father,
            'lastname_mother'=>$request->lastname_mother,
            'identity_number'=>$request->identity_number,
            'identification_Type_id',
            'gender'=>$request->gender,
            'birthdate'=>$request->birthdate,
            'district'=>$request->disctric,
            'province'=>$request->province,
            'department'=>$request->department,
            'via_id',
            'address'=>$request->address,
            'address_reference'=>$request->address_reference,
            'address_sketch'=>$request->address_sketh,
            'email_main'=>$request->email_name,
            'email_alternative'=>$request->email_alternative,
            'active'=>$request->active,
            'role_id',
            'phone_number01'=>$request->phone_number01,
            'phone_number02'=>$request->phone_number02,
            'phone_number03'=>$request->phone_number03,
            'phone_Type1_id',
            'phone_Type2_id',
            'phone_Type3_id',
            'phone_Operator1_id',
            'phone_Operator2_id',
            'phone_Operator3_id',
            'phone_notes01'=>$request->phone_notes01,
            'phone_notes02'=>$request->phone_notes02,
            'phone_notes03'=>$request->phone_notes03,
            'photo'=>$request->photo,
            'date_update_photo'=>$request->date_update_photo,
            'admission_date'=>$request->admission_date,
            'hire_date'=>$request->hire_date,
            'planning_date'=>$request->planning_date,
            'contract_term'=>$request->contract_term,
            'contract_type_id',
            'contract_image'=>$request->contract_image,
            'real_end_hiredate'=>$request->real_end_hiredate,
            'job_Type_id',
            'work_modality'=>$request->work_modality,
            'projected_number_time'=>$request->projected_number_time,
            'projected_unity_time'=>$request->projected_unity_time,
            'date_cessation'=>$request->date_cessation,
            'reason_cessation'=>$request->reason_cessation,

            'salary_advance_allowed'=>$request->salary_advance_allowed,
            'salary'=>$request->salary,
            'payrollsalary'=>$request->payrollsalary,
            
            'marital_status'=>$request->marital_status,
            'home_condition'=>$request->home_condition,
            'number_of_children'=>$request->number_of_children,
            'registerphoto_date'=>$request->registerPhoto_date,
            'availability_travel'=>$request->availability_travel,
            'work_area'=>$request->work_area,
            'clothing_size'=>$request->clothing_size,
            
            'newsletter'=>$request->newsletter,
            'linkedln'=>$request->linkedln,
            'medical_status'=>$request->medical_status,
            
            'driver_license_number'=>$request->driver_license_number,
            'date_expedition_driver_license'=>$request->date_expedition_driver_license,
            'sellbydate_driver_license'=>$request->sellbydate_driver_license,
            'type_driver_license'=>$request->type_driver_license,
            
            'image_schedule'=>$request->image_schedule,
            'date_update_schedule'=>$request->date_update_schedule,

            'cuspp'=>$request->cuspp,
            'bank_account_number'=>$request->bank_account_number,
            'payment_type'=>$request->payment_type,
            'financial_Entity_id',
            
            'bank_account'=>$request->bank_account,
            'student_children'=>$request->student_children,
        ]);
        return response()->json(['status=>201']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::find($id);
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
