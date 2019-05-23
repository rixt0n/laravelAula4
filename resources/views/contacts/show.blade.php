@extends('master')

@section('content')

    <p> <b>Nome:</b> {{$contact->name}} </p>
    <p> <b>Email:</b> {{$contact->email}} </p>
    <p> <b>Phone:</b> {{$contact->phone}} </p>
    

@endsection