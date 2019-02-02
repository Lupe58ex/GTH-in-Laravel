<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProfessionalExperience;
use App\Http\Resource\ProfessionalExperienceResource;

class ProfessionalExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionalExperience = ProfessionalExperience::paginate(15);
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
        $professionalExperience = ProfessionalExperience::create([
            'area_id'=>AreaResource::collection($request->area),
            'role_id'=>RoleResource::collection($request->role),
            'company_id'=>CompanyResource::collection($request->company),
            'start_month'=>$request->start_month,
            'start_year'=>$request->start_year,
            'end_month'=>$request->end_month,
            'end_year'=>$request->end_year,
            'contract_type_id'=>ContractTypeResource::collection($request->contrat_type),
            'function'=>$request->function,
            'user_id'=>UserResource::collection($request->user),
            'observation'=>$request->observation,
            'employee_id'=>EmployeeResource::collection($request->employee),
            'exit_reason'=>$request->exit_reason,
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
        $professionalExperience = ProfessionalExperience::findOrFail($id);
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
