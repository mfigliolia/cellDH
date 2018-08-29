<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <style>
        h1 {padding-top: 20px; padding-left: 10px;}
        h2,h5 {padding-left: 25px;}
    </style>
    <title>:: CELL.HOUSE - Agregar Marca</title>
</head>
<body>
    @include('partials/admin_header')
    <h1>:: Cell.House - Marcas </h1>
    <h5><a href="/admin">Volver</a> - <a href="/admin/brands/add">Agregar una marca a la base</a></h5>

    @forelse($marcas as $marca)
        <ul>
        <h5>
            <li>{{$marca->name}}</li>
        </h5>
        </ul>   
    @empty 
        <h5>
            <li> No hay marcas cargadas</li>
        </h5>   
    @endforelse
    
</body>
</html>