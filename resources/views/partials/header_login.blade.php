<?php if(session()) {
   $carrito = session()->get('productos');
}?>
<header>
  <div class="main-header">
      <a href="/">
        <img src="/images/logos/logo.png" atl="logo">
      </a>
      
    <form class="form-group" action="index" method="get" role="search"> 
          <div class="form-group">
              <label style="color:white;">Buscar producto:</label>
              <input style="height:30px;width: 200px;" type="text" name="s" value="{{ isset($s) ? $s : '' }}" class="form-control">
          </div>
      </form>    
  

      <nav class="login-nav">
        @guest
            <a href="/register">Creá tu cuenta</a>
            <a href="/login">Ingresá</a>
        @else
            <div class="dropdown">
                <button type="button" class="button-user">
                  <img src="/{{ Auth::user()->avatar }}" style="width: 45px; border-radius: 50%;">
                  <p style="color: white;"> {{Auth::user()->first_name}} </p>
                </button>
          
                <div class="dropdown-content">
                  <a href="{{ route('home') }}">Perfil</a>
                  <a href="#">Historial de compras</a>
                  
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesión') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
            </div>

          <a href="/carrito"><img style="width: 25px;" src="/images/logos/cart-empty.png" alt="carrito">( {{count($carrito)}} )</a>
        @endguest
      </nav>
  </div>
  
  <!-- LOW HEADER -->

  <div class="low-header">
      <a href="/">
        <img src="/images/logos/logo.png" atl="logo">
      </a>

      <nav class="login-nav">
        @guest
            <a href="/register">Creá tu cuenta</a>
            <a href="/login">Ingresá</a>
        @else
            <div class="dropdown">
                <button type="button" class="button-user">
                  <img src="/{{ Auth::user()->avatar }}" style="width: 45px; border-radius: 50%;">
                  <p style="color: white;"> {{Auth::user()->first_name}} </p>
                </button>
          
                <div class="dropdown-content">
                  <a href="{{ route('home') }}">Perfil</a>
                  <a href="/carrito">Carrito ({{count($carrito)}})</a>
                  <a href="#">Historial de compras</a>
                  
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesión') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
            </div>
        @endguest
      </nav>
  </div>
</header>




