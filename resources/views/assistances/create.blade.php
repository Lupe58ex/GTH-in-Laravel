@extends('layouts.app')

@section('content')
    <assistance-create-component
    employeesWithSchedules = "{{ json_encode($employeesWithSchedules) }}"
    ></assistance-create-component>
@endsection