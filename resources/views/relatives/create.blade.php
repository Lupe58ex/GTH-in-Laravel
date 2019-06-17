@extends('layouts.app')

@section('content')
    <relative-create-component
    genders = "{{ json_encode($genders) }}"
    relationships = "{{ json_encode($relationships) }}"
    employees = "{{ json_encode($employees) }}"
    ></relative-create-component>
@endsection