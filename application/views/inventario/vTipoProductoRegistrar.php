<php>

    <html>

    <body>
        <div class="container">
            <div class="contenerdorPrincipal">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 offset-xl-3">
                        <!-- Añadir producto a carro de venta -->
                        <h1 class="text-center">Registrar Nuevo Tipo De Producto</h1>
                        <form action="<?php echo base_url(); ?>index.php/cInventario/ccTipoProductoRegistrarG" method="POST" class="needs-validation">
                            <div class="form-group">
                                <label for="dineroApertura">Nombre Del Tipo De Producto</label>
                                <input type="text" placeholder="Nombre Del Tipo De Producto" id="txt_nombreTipoProducto_vTipoProductoRegistrar" name="txt_nombreTipoProducto_vTipoProductoRegistrar" class="form-control" required />
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-success" value="Registrar Tipo De Producto" id="btn_registrarTipoProducto_vTipoProductoRegistrar" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>

    </html>
</php>