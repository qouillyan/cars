@extends('layouts.master')

@section('title', 'Cars')

@section('content')

        <h1>Cars</h1>

        <ul>
            @foreach ($cars as $car)
                <li>
                    <a href="{{ route('single-car', ['id' => $car->id]) }}">
                        {{ $car->producer }}
                    </a>
                </li>
            @endforeach
        </ul>

@endsection