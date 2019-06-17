<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Relative;
use App\EmployeeReference;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resource\RelativeResource;
use App\Http\Resources\EmployeeListResource;

class RelativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relative = Relative::paginate(15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = [
            ['id' => 'M', 'name' => 'Masculino'],
            ['id' => 'F', 'name' => 'Feminino']
        ];
        $relationships = [
            ['name' => 'Conviviente'],
            ['name' => 'Esposo(a)'],
            ['name' => 'Hermano(a)'],
            ['name' => 'Hijo(a)'],
            ['name' => 'Madre'],
            ['name' => 'Padre'],
            ['name' => 'Sobrino(a)']
        ];
        $employees = new EmployeeListResource(Employee::all());
        return view('relatives.create', compact('relationships',
        'genders','employees'
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
        $relative = Relative::create([
            'name'=>$request->name,
            'lastname_mother'=>$request->lastname_mother,
            'lastname_father'=>$request->lastname_father,
            'gender'=>$request->gender,
            'birthdate'=>$request->birthdate,
            'cellphone'=>$request->cellphone,
            'house_via_id'=>$request->house_via_id,
            'house_address'=>$request->house_address,
            'job_via_id'=>$request->job_via_id,
            'job_address'=>$request->job_address,
            'place_job'=>$request->place_job,
            'dni'=>$request->dni,
            'full_age'=>$request->full_age,
            'address_file'=>$request->address_file,
            'is_student'=>$request->is_student,
            'house_reference'=>$request->house_reference,
        ]);
        return $relative;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relative = Relative::findOrFail($id);
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
        //$relative = Relative::where('id', $request->id)->update($request->only('name'));
        $relative = Relative::where('id', $request->id)->update($request->all());
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
