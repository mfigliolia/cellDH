@include('partials/head')

@include('partials/header_login')

@include('partials/navigation')

<div class="cart-list">

    <div class="cart-add">
        <div class="cart-status">
        <h3>Carrito ({{count($carrito)}}) -  
        <input id="btn-left" type="button" value="Comprar"> 
        <a href="/cart/destroy/"><input id="btn-right" type="button" value="Vaciar carrito"></a>
        </div>
    </div>

        @forelse($products as $producto)
        <div class="cart-add">
            <div class="cart-item">
                <div class="cart-img">
                    <img src="/storage/images/{{$producto->photo}}" alt="">
                </div>
                <div class="cart-content">
                    <strong><p id="item-title">{{$producto->name}}</p></strong>
                    <br>
                    <p>Hay <strong>{{$producto->stock}}</strong> unidades disponibles de este producto.</p> 

                <a href="/producto/{{$producto->id}}"><input id="btn-left" type="button" value="Info"></a>
                    
                    <!--<a href="/cart/delete/"><input id="btn-right" type="button" value="Eliminar"></a>-->
                </div>

                <div class="item-price">
                    <strong><p id="price">${{$producto->price}}</p>
                </div>
                
            </div>
        @empty
        <div class="cart-empty">
            <h2> Tu carrito está vacío </h2>
            <h3>¿No sabés qué comprar? ¡Miles de productos te esperan!</h3>
        </div>
        
    </div>
        @endforelse

    

</div>

@include('partials/footer')