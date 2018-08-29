@include('partials/head')
@include('partials/header_login')

<div class="container-login">
    <div class="login-user-container">
      <h1>Hola! Por favor, logueate <br> con tu email!</h1>
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

    <div class="login-user">
      <form action="{{ route('login') }}" method="post">
      @csrf    
        <input type="text" placeholder="Ingresá tu email..." name="email" style="border-color: rgb(203,31,7); height: 30px;" value="{{old('email')}}">
        <br>
        <input type="password" placeholder="Ingresá tu contraseña... " name="password" style="border-color: rgb(203,31,7); height: 30px;">
        <br>
        <input type="checkbox" class="checkbox" name="recordarme">
        <label for="recordarme">Recordarme en este sitio</label>
        <br>
      <input type="submit" name="login" value="Login">
    </form>

    <a href="register">Si no tenés cuenta, registrate acá</a>

    </div>
  </div>

</div>