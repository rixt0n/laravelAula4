@extends('master')

@section('content')
    <p>
        <a href="/contacts/create">Novo Contacto</a>
    </p>

    <ul>
        @foreach ($contacts as $contact)
        <li>
            <a href="/contacts/{{$contact->id}}">{{$contact->name }}</a>
             - {{$contact->email}} - 
             <a href="/contacts/{{$contact->id}}/edit">Edit</a>
             -
             <form action="/contacts/{{$contact->id}}" method="POST">
            @csrf
            @method ('DELETE')
            <input type="submit" value="Eliminar">
            
            </form>
        </li>
      
       

        @endforeach

@endsection