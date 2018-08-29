<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <style>
        h1 {padding-top: 20px; padding-left: 10px;}
        h2,h5,.product {padding-left: 25px;}
    </style>
    <title>Admin:: Productos</title>
</head>
<body>
    @include('partials/admin_header')
    <h1>:: Cell.House - Productos </h1>
    <h5><a href="/admin">Volver</a> - <a href="/admin/products/add">Agregar un producto a la base</a></h5>

    @forelse($productos as $producto)
    <div class="product">
        <h5>
            <strong>ID:</strong> {{$producto->id}} --
            <strong>Nombre:</strong> {{$producto->name}} --
            <a class="btn btn-success" href="/admin/products/edit/{{$producto->id}}" role="button">Editar</a></strong> --
            <a class="btn btn-danger" href="/admin/products/destroy/{{$producto->id}}" role="button">Borrar</a></strong>
        </h5>
    </div>
        <br>
    @empty
        <ul>
            <h5>
                <li> No hay productos cargados</li>
            </h5>
        </ul>       
    @endforelse
    {{ $productos->links() }} 
</body>
</html>