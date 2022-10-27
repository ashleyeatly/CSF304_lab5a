@extends('layouts.master')

@section('title', 'People')

@section('content')
    <p>People</p>
    <ul>
        @foreach($people as $people)
            <li>{{$people->first_name}} {{$people->surname}} {{$people->address}}</li>
        @endforeach
    </ul>
@endsection
