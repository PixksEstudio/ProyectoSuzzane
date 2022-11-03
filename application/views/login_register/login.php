<php>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <div class="content-body">
      <div class="form-wrapper">
<<<<<<< HEAD
        <form class="bg-white" action="<?php echo base_url(); ?>index.php/ControladorInicio/index">
=======
        <form class="bg-white" action="<?php echo base_url(); ?>index.php/ControladorInicio/consultar_dato" method="POST">
>>>>>>> 86dc500 (Verificacion de usuario y clave en login)
          <h1 class="text-title">Ingreso Al Sistema</h1>
          <div class="field-group">
            <label class="label" for="txt_UsuarioLogin">Usuario</label>
            <input class="input" type="text" id="txt_UsuarioLogin" name="usuarioLogin" placeholder="Ingrese Usuario" required />
          </div>
          <div class="field-group">
            <label class="label" for="txt_ClaveLogin">Clave</label>
<<<<<<< HEAD
            <input class="input" type="password" id="txt_ClaveLogin" name="usuarioLogin" placeholder="Ingrese Clave" required />
=======
            <input class="input" type="password" id="txt_ClaveLogin" name="claveLogin" placeholder="Ingrese Clave" required />
>>>>>>> 86dc500 (Verificacion de usuario y clave en login)
            <a href="<?php echo base_url(); ?>index.php/ControladorRecuperar/index" class="link-forgot">Olvidada?</a>
          </div>

          <div class="field-group">
<<<<<<< HEAD
            <input class="btn-submit" type="submit" value="Inicia Sesión" />
          </div>
        </form>

        <div class="bg-grey">
          <a href="<?php echo base_url(); ?>index.php/ControladorRegister/index" class="link-register">Registrate</a>
        </div>
      </div>
    </div>
  </body>

=======
            <input id="btn_logininiciar" class="btn-submit" type="submit" value="Inicia Sesión" />
          </div>
        </form>
        <!--
        <div class="bg-grey">
          <a href=" echo base_url(); index.php/ControladorRegister/index" class="link-register">Registrate</a>
        </div>-->
      </div>
    </div>
  </body>
>>>>>>> 86dc500 (Verificacion de usuario y clave en login)
  </html>
</php>