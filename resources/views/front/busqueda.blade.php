@include('partials/head')

@include('partials/header_login')

@include('partials/navigation')

<div class="titulo">
    <h2 align="center">Resultados de tu búsqueda...</h2>
</div>

@forelse($resultados as $producto)
<div class="cart-add" style:"background-color:white;">
    <div class="cart-item" style="border:solid;border-width:1px;background-color:white;">
        <div class="cart-img">
            <img src="/storage/images/{{$producto->photo}}" alt="">
        </div>
        <div class="cart-content">
            <strong><p id="item-title">{{$producto->name}}</p></strong>
            <br>
            <p>Hay <strong>{{$producto->stock}}</strong> unidades disponibles de este producto.</p> 

            <a href="/producto/{{$producto->id}}"><input id="btn-right" type="button" value="Info"></a>
            
            <a href="/cart/add/{{$producto->id}}"><input id="btn-left" type="button" value="Agregar carrito"></a>
        </div>

        <div class="item-price">
            <strong><p id="price">${{$producto->price}}</p>
        </div>
        
    </div>
@empty
<p>No se encontraron resultados</p>
@endforelse