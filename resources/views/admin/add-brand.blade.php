<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <style>
            h1 {padding-top: 20px; padding-left: 10px;}
            form,h5 {padding-left: 25px;}
        </style>
    <title>:: CELL.HOUSE - Agregar Marca</title>
</head>
<body>
    @include('partials/admin_header')
    
    <h1>:: CELL.HOUSE - Agregar Marca </h1>
    <h5><a href="/admin">Volver</a> - <a href="/admin/brands">Ver listado de marcas</a></h5>
    
    @if (count($errors))
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form id="addBrand" name="addBrand" method="POST" action="">
        @csrf
        <div>
            <label for="name">Nombre de marca</label>
            <input type="text" value="{{old('name')}}" name="name" id="name"/>
        </div>
       
        <input type="submit" value="Agregar Marca" name="submit" class="btn btn-success"/>
    </form>
</body>
</html>