@extends('layouts.master')

@section('title', 'People')

@section('content')
    <p>People</p>
    <ul>
        @foreach($people as $person)
            <li><a href="{{route('people.show',['id'=>$person->id])}}">{{$person->first_name}} {{$person->surname}} {{$person->address}}</li>
        @endforeach
    </ul>
@endsection
