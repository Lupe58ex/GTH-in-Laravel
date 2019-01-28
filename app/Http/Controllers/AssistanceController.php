<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Assistance;
use App\Http\Resources\AssistanceResource;

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
        $Assistance = Assistance::pagination(15);
        return $Assistance;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Assistance=Assistance::create([
            'date'=>$request->date,
            'employee_id'=>EmployeeResource::collection($request->employee),
            'planned_start_hour'=>$request->planned_start_hour,
            'planned_end_hour'=>$request->planned_end_hour,
            'real_start_time'=>$request->real_start_time,
            'real_end_time'=>$request->real_end_time,
            'user_id'=>UserResource::collection($request->user),
            'schedule_id'=>ScheduleResource::collection($request->schedule),
            'observation'=>$request->observation,
            'no_attendance'=>$request->no_attendance,
            'discount_quantity'=>$request->discount_quantity,
            'observations'=>$request->observations,
            'justification_id'=>JustificationResource::collection($request->justification)
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
        $Assistance = Assistance::findOrFail($id);
        
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
