<php>
    <html>

    <body>
        <div class="container">
            <div class="contenerdorPrincipal">
                <h1 class="text-center">Configuración Administrador</h1>
                <div class="row">
                    <div class="col-xl-6 col-sm-12">
                        <h1 class="text-center">Registrar Usuario</h1>
                        <form action="<?php echo base_url(); ?>index.php/cConfiguracion/ccRegistrarUsuario" method="POST" class="needs-validation">
                            <div class="form-group">
                                <label for="txt_nombreUsuarioRegistrar_vConfiguracionA">Nombre Del Usuario</label>
                                <input type="text" placeholder="Nombre Del Usuario" id="txt_nombreUsuarioRegistrar_vConfiguracionA" name="txt_nombreUsuarioRegistrar_vConfiguracionA" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="txt_correoUsuarioRegistrar_vConfiguracionA">Correo Del Usuario</label>
                                <input type="email" placeholder="Correo Del Usuario" id="txt_correoUsuarioRegistrar_vConfiguracionA" name="txt_correoUsuarioRegistrar_vConfiguracionA" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="txt_claveUsuarioRegistrar_vConfiguracionA">Clave Del Usuario</label>
                                <input type="password" placeholder="Clave Del Usuario" id="txt_claveUsuarioRegistrar_vConfiguracionA" name="txt_claveUsuarioRegistrar_vConfiguracionA" class="form-control" required />
                            </div>
                            <label for="dineroApertura">Tipo De Usuario</label>
                            <div class="form-group">
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="radio_tipoUsuarioRegistrar_vConfiguracionA" id="radio_tipoUsuarioRegistrar_vConfiguracionAA" value="1">
                                    <label class="form-check-label" for="radio_tipoUsuarioRegistrar_vConfiguracionAA">
                                        Administrador
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="radio" name="radio_tipoUsuarioRegistrar_vConfiguracionA" id="radio_tipoUsuarioRegistrar_vConfiguracionAG" value="2" required>
                                    <label class="form-check-label" for="radio_tipoUsuarioRegistrar_vConfiguracionAG">
                                        General
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-success" value="Registrar Usuario" id="btn_registrarProducto_vProductoRegistrar" />
                            </div>
                        </form>

                    </div>
                    <div class="col-xl-6 col-sm-12">
                        <h1 class="text-center">Actualizar Datos</h1>
                        <form action="<?php echo base_url(); ?>index.php/cInventario/ccProductoRegistrarG" method="POST" class="needs-validation">
                            <div class="form-group">
                                <label for="dineroApertura">Nombre Del Usuario</label>
                                <input type="text" placeholder="Nombre Del Usuario" id="txt_nombreProducto_vProductoRegistrar" name="txt_nombreProducto_vProductoRegistrar" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="dineroApertura">Correo Del Usuario</label>
                                <input type="email" placeholder="Correo Del Usuario" id="txt_nombreProducto_vProductoRegistrar" name="txt_nombreProducto_vProductoRegistrar" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="dineroApertura">Clave Del Usuario</label>
                                <input type="password" placeholder="Clave Del Usuario" id="txt_nombreProducto_vProductoRegistrar" name="txt_nombreProducto_vProductoRegistrar" class="form-control" required />
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-success" value="Actualizar Datos" id="btn_registrarProducto_vProductoRegistrar" />
                            </div>
                        </form>
                    </div>
                    <div class="col-10 offset-xl-1">
                        <h1 class="text-center">Usuarios Registrados</h1>
                        <table class="table table-bordered" id="tablaGeneral">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre Usuario</th>
                                    <th scope="col">Rol Usuario</th>
                                    <th scope="col">Estado Usuario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Carga de inventario -->
                                <?php foreach ($usuarios as $usuario) { ?>
                                    <tr>
                                        <td><?php echo $usuario->id_usuario; ?></td>
                                        <td><?php echo $usuario->nombre_usuario; ?></td>
                                        <td><?php echo $usuario->nombre_rol_usuario; ?></td>
                                        <td><?php echo $usuario->estado_estado; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </body>

    </html>
</php>