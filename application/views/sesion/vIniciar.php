<php>
  <html>

  <body>
    <div class="content-body">
      <div class="form-wrapper">
        <form class="bg-white" action="<?php echo base_url(); ?>index.php/cSesion/ccValidar" method="POST">
          <h1 class="text-title">Ingreso Al Sistema</h1>
          <div class="field-group">
            <label class="label" for="txtUsuarioIniciar">Usuario</label>
            <input class="input" type="text" id="txtUsuarioIniciar" name="txtUsuarioIniciar" placeholder="Ingrese Usuario" required />
          </div>
          <div class="field-group">
            <label class="label" for="txtClaveIniciar">Clave</label>
            <input class="input" type="password" id="txtClaveIniciar" name="txtClaveIniciar" placeholder="Ingrese Clave" required />
            <a href="<?php echo base_url(); ?>index.php/cSesion/ccRecuperar" class="link-forgot">Olvidada?</a>
          </div>
          <?php
          if (isset($mensaje)) { ?>
            <span id="mensajeErrorIniciar"><?php echo $mensaje; ?></span>
          <?php }
          ?>
          <div class="field-group">
            <input id="btnIniciar" class="btn-submit" type="submit" value="Inicia Sesión" />
          </div>
        </form>
      </div>
    </div>
  </body>

  </html>
</php>