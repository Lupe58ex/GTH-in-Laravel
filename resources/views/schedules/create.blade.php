@extends('layouts.app')

@section('content')
    <schedule-create-component
        turns = "{{ json_encode($turns) }}"
    ></schedule-create-component>
@endsection