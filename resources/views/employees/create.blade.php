@extends('layouts.app')

@section('content')
    <employee-create-component
    identification_types = "{{ $identificationTypes }}"
    genders = "{{ json_encode($genders) }}"
    civil_states = "{{ json_encode($civilStates) }}"
    departments = "{{ $departments }}"
    provinces = "{{ $provinces }}"
    districts = "{{ $districts }}"
    phone_operators = "{{ $phoneOperators }}"
    phone_types = "{{ $phoneTypes }}"
    agencies = "{{ $agencies }}"
    areas = "{{ $areas }}"
    roles = "{{ $roles }}"
    contract_types = "{{ $contractTypes }}"
    job_types = "{{ $jobTypes }}"
    disponibility_to_travel = "{{ json_encode($disponibilityToTravel) }}"
    types_licenses = "{{ json_encode($typesLicenses) }}"
    clothing_sizes = "{{ json_encode($clothingSizes) }}"
    ></employee-create-component>
@endsection