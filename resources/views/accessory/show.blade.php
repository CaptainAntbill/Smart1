<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Document</title>
</head>

<body>
    <dl>
        <dt>Nombre</dt>
        <dd>{{ $accessories->name }}</dd>
        <dt>Cantidad</dt>
        <dd>{{ $accessories->quantity }}</dd>
        <dt>Telefono</dt>
        <dd>{{ $accessories->price }}</dd>
        <dt>Marca</dt>
        <dd>{{ $accessories->brand['name']}}</dd>


    </dl>
    <a href="{{ route('accessory.index') }}">Lista</a>
</body>

</html>