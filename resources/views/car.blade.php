
@extends('layouts.master')

@section('title', $car->title)
        
@section('content')
        
        <h1>Car</h1>

        <p>{{ $car->producer }}</p>
        
@endsection
