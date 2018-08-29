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
    <title>:: CELL.HOUSE - Editar producto</title>
</head>
<body>
    @include('partials/admin_header')
    <h1>:: CELL.HOUSE - Editar producto</h1>
    <h5><a href="/admin/products">Volver</a> 

    <main class="container">
        @if (count($errors))
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form class="form-group" action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nombre de producto</label>
                <input type="text" value="{{$producto->name}}" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea name="description" value="{{$producto->description}}" id="description" class="form-control">{{$producto->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="text" name="price" value="{{$producto->price}}" id="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="categorie">Categoría</label>
                    <select name="categorie_id" value="{{$producto->categorie->name}}" id="categorie_id" class="form-control">
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="brand">Marca</label>
                    <select name="brand_id" value="{{$producto->brand->name}}" id="brand_id" class="form-control">
                        @foreach($marcas as $marca)
                            <option value="{{$marca->id}}">{{$marca->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">Imagen de producto</label><br>
                    <input type="file" name="photo"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="enviador" value="Actualizar producto" class="btn btn-success">
                </div>
        </form>    