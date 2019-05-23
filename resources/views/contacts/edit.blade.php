@extends ('master')

@section('content')

<form action="/contacts/{{$contact->id}}" method="POST">
        @csrf
        @method('PUT') <!--ISTO E PARA A LARAVEL INTERPRETAR O POST COMO PUT-->
        <p>
            Nome: <input type="text" name="name" value="{{$contact->name}}">

        </p>
        <p>
            Email: <input type="email" name="email"  value="{{$contact->email}}">

        </p>
        <p>
            Phone: <input type="text" name="phone" value="{{$contact->name}}">

        </p>
        <p>
            <input type="submit" value="Enviar" >

        </p>


    </form>
    

@endsection