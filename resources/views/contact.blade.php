@extends('master')

@section('contect')
    <h1>Contact 1</h1>
    <p>{{$name}}</p>

    @if($name != 'Pedro')
        Tu nombre no es Pedro.

        @else
        Tu nombre es Pedro
    @endif
@endsection