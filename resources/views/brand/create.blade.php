<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('brand.store') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="name" required placeholder="Nombre Completo" value=""><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>