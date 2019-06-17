@extends('layouts.app')

@section('content')
    <assistance-create-component
        employees_with_schedules = "{{ json_encode($employeesWithSchedules) }}"
    ></assistance-create-component>
@endsection