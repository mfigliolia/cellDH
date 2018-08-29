<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <style>
        h1 {padding-top: 20px; padding-left: 10px;}
        h2 {padding-left: 25px;}
    </style>
    <title>:: Admin - CELL.HOUSE</title>
</head>
<body>
    @include('partials/admin_header')
    
    <h1>Cell.House :: Admin</h1>
    
    <h2>Productos</h2>
    <ul>
    <h5>
        <a href="/admin/products/add"><li>Agregar un producto</li></a>
        <a href="/admin/products"><li>Ver todos los productos</li></a>
    </h5>    
    </ul>

    <h2>Categorías</h2>
    <ul>
    <h5>    
        <a href="/admin/categories/add"><li>Agregar una categoría</li></a>
        <a href="/admin/categories"><li>Ver todas las categorías</li></a>
    </h5>    
    </ul>
    
    <h2>Marcas</h2>
    <ul>
    <h5>    
        <a href="/admin/brands/add"><li>Agregar una marca</li></a>
        <a href="/admin/brands"><li>Ver todas las marcas</li></a>
    </h5>
    </ul>
</body>
</html>