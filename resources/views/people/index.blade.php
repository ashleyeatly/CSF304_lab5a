@extends('layouts.master')

@section('title', 'People')

@section('content')
    <article>
{{--    <p>Animals at Swansea Zoo</p>--}}
        <ul>
            @foreach($people as $person)
                <li>
                    <a href="{{route('people.show',['id'=>$person->id])}}">{{$person->first_name}} {{$person->surname}} {{$person->address}}
                </li>
            @endforeach
        </ul>
    </article>

@endsection
{{--@section('content')--}}
{{--    <example-component></example-component>--}}
{{--@endsection--}}
