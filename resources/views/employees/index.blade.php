@extends('layouts.app')

@section('content')
    <employee-index-component employees="{{ json_encode($employees) }}" ></employee-index-component>
@endsection
