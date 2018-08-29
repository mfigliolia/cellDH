
@include('partials/head')

@include('partials/header_login')

@include('partials/navigation')

  <!-- banner "preventa" -->

  <img class="banner" src="images/banner_1.jpg" alt="banner">

  <!-- fin banner "preventa" -->

<div class="titulo">
    <h2 align="center">Lo último en CELULARES</h2>
</div>

<section class="novedades">
  @foreach($celulares as $producto)
      <article class="product">
          <img src="/storage/images/{{$producto->photo}}">
          <h3>{{$producto->name}}</h3>
          <p><strong>${{$producto->price}}</strong></p>
          <div class="botonera">
            <a class="btn-info" href="/celular/{{$producto->id}}">Info</a>
            <a class="btn-cart" href="/cart/add/{{$producto->id}}"><img style="width: 30px;" src="images/logos/cart-add.png"></a>
          </div>  
      </article>
  @endforeach
</section>

<div class="titulo">
  <h2 align="center">Lo último en ACCESORIOS</h2>
</div>

<section class="novedades">
  @foreach($accesorios as $producto)
      <article class="product">
          <img src="/storage/images/{{$producto->photo}}">
          <h3>{{$producto->name}}</h3>
          <p><strong>${{$producto->price}}</strong></p>
          <div class="botonera">
            <a class="btn-info" href="/accesorio/{{$producto->id}}">Info</a>
            <a class="btn-cart" href="/cart/add/{{$producto->id}}"><img style="width: 35%;" src="images/logos/cart-add.png"></a>
          </div>
      </article>
  @endforeach
</section>
@include('partials/footer')