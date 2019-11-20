<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body><br>
    <div class="container">
        <div class="hero is-link">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1">Tipo de Gama: {{$spectrums->type_spectrum }}</h1>
                </div>
            </div>
        </div>
    </div> <br>
    <nav class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/brand">Gammas</a></li>
                <li><a href="#">detalle</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">

        <div class="notification">
            <div class="columns">
                <div class="column">
                    <h1 class="title is-3" style="font-weight: 300">
                        Gamma
                    </h1>
                </div>
                <div class="column">
                </div>
                <div class="column ">
                    <a class="button is-info is-three-half" href="{{ route('spectrum.edit', $spectrums->id) }}">Editar Gama</a>
                    <a class="button is-info is-pulled-right" href="{{ route('spectrum.index') }}"> Ir a Lista</a>
                </div>
            </div>
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Tipo de Gama</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $spectrums->type_spectrum }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>