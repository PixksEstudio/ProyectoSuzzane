<php>
  <html>

  <body>
    <div class="content-body">
      <div class="form-wrapper">
        <form class="bg-white" action="<?php echo base_url(); ?>index.php/cInicio/ccInicio" method="POST">
          <h1 class="text-title">Ingreso Al Sistema</h1>
          <div class="field-group">
            <label class="label" for="txt_UsuarioLogin">Usuario</label>
            <input class="input" type="text" id="txt_UsuarioLogin" name="usuarioLogin" placeholder="Ingrese Usuario" required />
          </div>
          <div class="field-group">
            <label class="label" for="txt_ClaveLogin">Clave</label>
            <input class="input" type="password" id="txt_ClaveLogin" name="claveLogin" placeholder="Ingrese Clave" required />
            <a href="<?php echo base_url(); ?>index.php/cSesion/ccRecuperar" class="link-forgot">Olvidada?</a>
          </div>

          <div class="field-group">
            <input id="btn_logininiciar" class="btn-submit" type="submit" value="Inicia Sesión" />
          </div>
        </form>
      </div>
    </div>
  </body>

  </html>
</php>