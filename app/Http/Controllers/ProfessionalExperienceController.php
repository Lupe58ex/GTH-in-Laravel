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
            'area_id'=>$request->area_id,
            'role_id'=>$request->role_id,
            'company_id'=>$request->company_id,
            'start_month'=>$request->start_month,
            'start_year'=>$request->start_year,
            'end_month'=>$request->end_month,
            'end_year'=>$request->end_year,
            'contract_type_id'=>$request->contrat_type_id,
            'function'=>$request->function,
            'user_id'=>$request->user_id,
            'observation'=>$request->observation,
            'employee_id'=>$request->employee_id,
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
        //$professionalExperience = ProfessionalExperience::where('id',$request->id)->update($request->only(''));
        $professionalExperience = ProfessionalExperience::where('id',$request->id)->update($request->all());
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
