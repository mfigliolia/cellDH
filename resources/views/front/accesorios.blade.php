@include('partials/head')

@include('partials/header_login')

@include('partials/navigation')

<div class="titulo">
    <h2 align="center">ACCESORIOS</h2>
</div>

<section class="novedades">
    @foreach($linea1 as $producto)
        <article class="product">
            <img src="/storage/images/{{$producto->photo}}">
            <h3>{{$producto->name}}</h3>
            <p><strong>${{$producto->price}}</strong></p>
            <div class="botonera">
                <a class="btn-info" href="/accesorio/{{$producto->id}}">Info</a>
                <a class="btn-cart" href="/cart/add/{{$producto->id}}"><img style="width: 30px;" src="images/logos/cart-add.png"></a>
            </div>    
        </article>
    @endforeach
</section>

<section class="novedades">
    @foreach($linea2 as $producto)
        <article class="product">
            <img src="/storage/images/{{$producto->photo}}">
            <h3>{{$producto->name}}</h3>
            <p><strong>${{$producto->price}}</strong></p>
            <div class="botonera">
                <a class="btn-info" href="/accesorio/{{$producto->id}}">Info</a>
                <a class="btn-cart" href="/cart/add/{{$producto->id}}"><img style="width: 30px;" src="images/logos/cart-add.png"></a>
            </div>    
        </article>
    @endforeach
</section>

@include('partials/footer')