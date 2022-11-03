@extends('layouts.master')
@section('title','Create Person')
@section('content')
    <form method="POST" action="{{route('people.store')}}">
        @csrf
        <p>Title: <input type="text" name="title" value="{{old('title')}}"></p>
        <p>FirstName: <input type="text" name="first_name" value="{{old('first_name')}}"></p>
        <p>Surname: <input type="text" name="surname" value="{{old('surname')}}"></p>
        <p>Address: <input type="text" name="address" value="{{old('address')}}"></p>
        <input type="submit" value="Submit">
        <a href="{{route('people.index')}}">Cancel</a>
    </form>
@endsection
