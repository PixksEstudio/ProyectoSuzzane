<php>

    <body>
        <div class="container">
            <div class="contenerdorPrincipal">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 offset-xl-3">
                        <!-- Añadir producto a carro de venta -->
                        <h1 class="text-center">Registrar Nuevo Producto</h1>
                        <form action="<?php echo base_url(); ?>index.php/cInventario/ccProductoRegistrarG"method="POST" class="needs-validation">
                            <div class="form-group">
                                <label for="txt_codigoBarra">Codigo De Barra</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Codigo De Barra" id="txt_codigoBarra_vProductoRegistrar" name="txt_codigoBarra_vProductoRegistrar" required>
                                    <button class="btn btn-outline-dark" type="button" id="btn_escanerCodigoBarra_vProductoRegistrar">Escanear Codigo De Barra</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dineroApertura">Nombre Del Producto</label>
                                <input type="text" placeholder="Nombre Del Producto" id="txt_nombreProducto_vProductoRegistrar" name="txt_nombreProducto_vProductoRegistrar" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="seleectConcepto">Tipo De Producto</label>
                                <select id="select_tipoProducto_vProductoRegistrar" name="select_tipoProducto_vProductoRegistrar" class="form-select"  required>
                                    <option value="" selected disabled>---Tipos---</option>
                                    <!--Traer los tipos de producto desde la base de dato para rellenar el select-->
                                    <?php foreach ($tiposProducto as $tipoProducto) { ?>
                                        <option value="<?php echo $tipoProducto->id_tipo_producto; ?>"><?php echo $tipoProducto->nombre_tipo_producto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="dineroApertura">Precio Del Producto</label>
                                <input type="number" placeholder="Precio Del Producto" id="txt_precioProducto_vProductoRegistrar" name="txt_precioProducto_vProductoRegistrar" class="form-control" step="any" required/>
                            </div>
                            <div class="form-group">
                                <label for="dineroApertura">Cantidad Inicial Del Producto</label>
                                <input type="number" placeholder="Cantidad Inicial Del Producto" id="txt_cantidadInicialProducto_vProductoRegistrar" name="txt_cantidadInicialProducto_vProductoRegistrar" class="form-control" step="any" required/>
                            </div>
                            <div class="form-group">
                                <label for="seleectConcepto">Forma De Medir El Producto</label>
                                <select id="select_formaMedirProducto_vProductoRegistrar" name="select_formaMedirProducto_vProductoRegistrar" class="form-select" required>
                                    <option value="" selected disabled>---Medidas---</option>
                                    <!--Traer los tipos de medida desde la base de dato para rellenar el select-->
                                    <?php foreach ($tiposMedida as $tipoMedida) { ?>
                                        <option value="<?php echo $tipoMedida->id_medida; ?>"><?php echo $tipoMedida->nombre_medida; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dineroApertura">Descripción Del Producto</label>
                                <textarea class="form-control" placeholder="Descripción Del Producto" id="txt_descripcionProducto_vProductoRegistrar" name="txt_descripcionProducto_vProductoRegistrar" rows="4" required></textarea>
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-success" value="Registrar Producto" id="btn_registrarProducto_vProductoRegistrar"/>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
</php>