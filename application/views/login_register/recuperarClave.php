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
        <form class="bg-white">
          <h1 class="text-title">Recuperar Clave</h1>
          <div class="field-group">
            <label class="label" for="txt_CorreoRegister">Correo</label>
            <input class="input" type="mail" id="txt_CorreoRegister" name="usuarioLogin" placeholder="Ingrese Correo" required />
          </div>
          <div class="field-group">
            <input class="btn-submit" type="submit" value="Enviar" />
          </div>
        </form>

        <div class="bg-grey">
          <a href="<?php echo base_url(); ?>index.php/ControladorLogin/index" class="link-register">Inicia Sesión</a>
        </div>
      </div>
    </div>
  </body>

  </html>
</php>