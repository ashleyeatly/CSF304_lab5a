@extends('layouts.master')

@section('title', 'Person')

@section('content')
    <p>Person</p>
    <ul>
        <li>Title: {{$person->title}}</li>
        <li>First Name: {{$person->first_name}}</li>
        <li>Surname: {{$person->surname}}</li>
        <li>Address: {{$person->address}}</li>
    </ul>
    <a href="{{route('people.index')}}">Back</a>
@endsection
