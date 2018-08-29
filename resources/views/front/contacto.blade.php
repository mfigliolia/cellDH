@include('partials/head')

@include('partials/header_login')

@include('partials/navigation')
  
<div class="container-login">
    <div class="login-user-container">
      <h1>Llená el formulario y <br> responderemos tu consulta</h1>
      <div class="contact-form">
            <section class="container-form">
                <form class="form-group" action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Email de contacto:</label>
                        <input type="email" name="email" class="form-control" style="width: 37%;">
                    </div><br>
                    <div class="form-group">
                        <label>Tu consulta</label><br>
                        <textarea name="consulta" class="form-control" style="width:66%;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="Enviar" value="Enviar consulta">
                    </div>
            </section>
      </div>    
    </div>
</div>         