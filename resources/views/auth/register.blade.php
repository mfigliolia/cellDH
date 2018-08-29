@include('partials/head')
@include('partials/header_login')

<body>
    
    <div class="box_fill_in">
        <div class="login-user-container">
            <h1 style="height: 80px;">Registrate en Cell.House!<br>Por favor completá tus datos:</h1>
        <!--</div>-->
      
        @if (count($errors))
        <div class="error-alert" style="background-color: rgb(240,240,240);">
            <div><strong>Ups...</strong></div>
            <ul style="color: rgb(203,31,7);">    
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach 
            </ul>              
        </div>
        @endif

        <div class="register-user">
          <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
              <label for="first_name">Nombre:</label>
              <input class="" placeholder="Ingresá tu nombre" type="text" name="first_name" id="first_name" value="{{old('first_name')}}">
              <br>
              <label for="last_name">Apellido:</label>
              <input class="" placeholder="Ingresá tu apellido" type="text" name="last_name" id="last_name" value="{{old('last_name')}}">
              <br>
              <label for="email">E-mail:</label>
              <input class="" placeholder="Ingresá tu email" type="text" name="email" id="email" value="{{old('email')}}">
              <br>
              <label for="password">Contraseña:</label>
              <input class="" placeholder="Ingresá tu clave" type="password" name="password" id="password">
              <br>
              <label for="password-confirm">Confirmá contraseña:</label>
              <input placeholder="Confirmá tu clave" type="password" name="password_confirmation" id="password-confirm">
              <br>
              <label for="address">Domicilio:</label>
              <input class="" placeholder="Ingresá tu domicilio" type="text" name="address" id="address" value="{{old('address')}}">
              <br>
              <input type="submit">
          </form>
          <a href="login">Si ya tenés cuenta, logueate acá </a>
        </div>

        </div>
    </div>

</body>
</html>
