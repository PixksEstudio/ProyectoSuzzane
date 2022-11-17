<php>
    <html>

    <body>
        <div class="container">
            <div class="contenerdorPrincipal">
                <h1 class="text-center">Configuración General</h1>
                <div class="row">
                    <div class="col-sm-12 col-xl-6 offset-xl-3">
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
                </div>
            </div>
    </body>

    </html>
</php>