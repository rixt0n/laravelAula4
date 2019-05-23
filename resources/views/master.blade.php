<html lang="en">
<head>
       
    <title>Exemplo templates</title>
</head>
<body>
    <div>
        <a href="/">Home</a>
        <a href="/contacts">Contactos</a>
    </div>
    <hr>
    <div>
        @yield ('content')
    </div>
    <hr>
    <div>
        Copyright ATEC 2019
    </div>
</body>
</html>