<?php

namespace App\Http\Controllers;

use App\Area;
use App\Role;
use App\Agency;
use App\JobType;
use App\District;
use App\Employee;
use App\Province;
use App\PhoneType;
use App\Department;
use App\ContractType;
use App\PhoneOperator;
use App\IdentificationType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resouces\EmployeeResource;
use App\Http\Resources\EmployeeListResource;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return "hey there";
        //$emp = Employee::all();       
        //$employees = new EmployeeListResource($emp);
        //return $employees;
        //return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $identificationTypes = IdentificationType::all();
        $genders = [
            ['id' => 'M', 'name' => 'Masculino'],
            ['id' => 'F', 'name' => 'Feminino']
        ];
        $civilStates = [
            ['name' => 'Soltero(a)'],
            ['name' => 'Conviviente'],
            ['name' => 'Casado(a)'],
            ['name' => 'Divorciado(a)'],
            ['name' => 'Viudo(a)']
        ];
        $departments = Department::all();
        $provinces = Province::all();
        $districts = District::all();
        $phoneOperators = PhoneOperator::all();
        $phoneTypes = PhoneType::all();
        $agencies = Agency::all();
        $areas = Area::all();
        $roles = Role::all();
        $contractTypes = ContractType::all();
        $jobTypes = JobType::all();
        $disponibilityToTravel = [
            ['id'=>1,'name'=>'si'],
            ['id'=>0,'name'=>'no']
        ];
        $typesLicenses = [
            ['id'=>'moto','name'=>'Moto'],
            ['id'=>'auto','name'=>'Auto'],
            ['id'=>'ambos','name'=>'ambos']
        ];
        $clothingSizes = [
            ['name' => 'XS'],
            ['name' => 'S'],
            ['name' => 'M'],
            ['name' => 'L'],
            ['name' => 'XL']
        ];
        
        return view('employees.create', compact('identificationTypes',
        'genders',
        'departments',
        'civilStates',
        'provinces',
        'districts',
        'phoneOperators',
        'phoneTypes',
        'agencies',
        'areas',
        'roles',
        'contractTypes',
        'jobTypes',
        'disponibilityToTravel',
        'typesLicenses',
        'clothingSizes'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employee::create($request->all());
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
        $employee= Employee::find($id);
        $employeeJustName = new EmployeeResource($employee);
        return $employeeJustName;
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
        $employee = Employee::findORFail($id);
        $employee->update($request->all());
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
