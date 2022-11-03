@extends('layouts.master')

@section('title', 'Person')

@section('content')

    <div class="panel panel-default">
        <!-- Content here -->
        <div class="panel-heading">Panel Heading</div>
        <a href="{{route('people.create')}}">Create Person</a>
        <div class="panel-body">
            <ul>
                <li>Title: {{$person->title}}</li>
                <li>First Name: {{$person->first_name}}</li>
                <li>Surname: {{$person->surname}}</li>
                <li>Address: {{$person->address}}</li>
            </ul>
            <a href="{{route('people.index')}}"><button type="button" class="btn btn-primary">Back</button></a>
            {{--        <a href="{{route('people.index')}}" class="btn btn-primary">Back</a>--}}
        </div>
    </div>
@endsection
