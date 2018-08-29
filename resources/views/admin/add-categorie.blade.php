<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <style>
        h1 {padding-top: 20px; padding-left: 10px;}
        h2,h5,form {padding-left: 25px;}
    </style>
    <title>:: CELL.HOUSE - Agregar Categoría</title>
</head>
<body>
    @include('partials/admin_header')
    <h1>:: Cell.House - Agregar Categoría</h1>
    @if (count($errors))
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form id="addCategorie" name="addCategorie" method="POST" action="">
        @csrf
        <div>
            <label for="name">Categoria</label>
            <input type="text" value="{{old('name')}}" name="name" id="name"/>
        </div>
       
        <input type="submit" value="Agregar Categoria" name="submit" class="btn btn-success"/>
    </form>
    <br>
    <h5><a href="/admin">Volver</a> - <a href="/admin/categories">Ver listado de categorías</a></h5>
</body>
</html>