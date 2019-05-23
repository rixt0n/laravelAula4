@extends ('master')

@section('content')

    <form action="/contacts" method="POST">
        @csrf
        <p>
            Nome: <input type="text" name="name">

        </p>
        <p>
            Email: <input type="email" name="email">

        </p>
        <p>
            Phone: <input type="text" name="phone">

        </p>
        <p>
            <input type="submit" value="create">

        </p>


    </form>

@endsection
