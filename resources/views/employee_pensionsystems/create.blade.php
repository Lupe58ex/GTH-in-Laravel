@extends('layouts.app')

@section('content')
    <employee_pensionsystem-create-component 
    employees = "{{ json_encode($employees) }}" 
    pensionsystems = "{{ json_encode($pensionSystems) }}">
    </employee_pension_system-create-component>
@endsection 
