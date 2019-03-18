@extends('layouts.app')

@section('content')
    <employee_schedule-create-component
        employees = "{{ $employees }}"
        afternoon_schedules = "{{ $afternoonSchedules }}"
        morning_schedules = "{{ $morningSchedules }}"

    ></employee_schedule-create-component>
@endsection