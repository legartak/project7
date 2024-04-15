@php use App\Models\Driver @endphp
@extends('basic-app')

@section('title', 'F1 driver database - Driver Profile')

@php
    $drivers = [
        new Driver(name: "Charles Leclerc", current_team: "Scuderia Ferrari", photo: "images/Charles-Leclerc.jpg", country: "Monaco", years: 26),
        new Driver(name: "Fernando Alonso", current_team: "Aston Marin", photo: "images/Fernando_Alonso.jpg", country: "Spain", years: 42),
        new Driver(name: "Carlos Sainz", current_team: "Scuderia Ferrari", photo: "images/Carlos_Sainz.jpg", country: "Spain", years: 29),
    ]
@endphp

@section('content')
    <img src="{{ asset($drivers[$id]->photo)}}" alt="F1 driver photo">
    <h1>{{$drivers[$id]->name}}</h1>
    <p>Current team: {{$drivers[$id]->current_team}}</p>

    @if($fullMode)
        <p>Country: {{$drivers[$id]->country}}</p>
        <p>Full years: {{$drivers[$id]->years}}</p>
    @endif
@endsection

