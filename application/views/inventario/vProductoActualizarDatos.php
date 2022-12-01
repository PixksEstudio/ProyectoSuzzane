<php>

    <body>
        <div class="container">
            <div class="contenerdorPrincipal">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 offset-xl-3">
                        <!-- Registrar Nuevo Producto -->
                        <h1 class="text-center">Actualizar Producto Existente</h1>
                        <form action="<?php echo base_url(); ?>index.php/cInventario/ccProductoActualizarDatosG" method="POST">
                            <div class="form-group">
                                <label for="txt_codigoBarra">Codigo De Barra</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Codigo De Barra" id="txt_codigoBarra_vProductoActualizarDatos" name="txt_codigoBarra_vProductoActualizarDatos" required>
                                    <button class="btn btn-outline-dark" type="button" id="btn_escanerCodigoBarra">Escanear Codigo De Barra</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="seleectConcepto">Nombre Del Producto</label>
                                <select id="select_nombreProducto_vProductoActualizarDatos" name="select_nombreProducto_vProductoActualizarDatos" class="form-select">
                                    <option value="" selected disabled>---Nombre Productos---</option>
                                    <?php foreach ($productos as $producto) { ?>
                                        <option value="<?php echo $producto->id_producto; ?>"><?php echo $producto->nombre_producto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dineroApertura">Nuevo Nombre Del Producto</label>
                                <input type="text" placeholder="Nuevo Nombre Del Producto" id="txt_nombreProducto_vProductoActualizarDatos" name="txt_nombreProducto_vProductoActualizarDatos" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="seleectConcepto">Tipo De Producto</label>
                                <select id="select_tipoProducto_vProductoActualizarDatos" name="select_tipoProducto_vProductoActualizarDatos" class="form-select">
                                    <option value="" selected disabled>---Tipo De Producto---</option>
                                    <?php foreach ($tiposProducto as $tipoProducto) { ?>
                                        <option value="<?php echo $tipoProducto->id_tipo_producto; ?>"><?php echo $tipoProducto->nombre_tipo_producto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="dineroApertura">Precio Del Producto</label>
                                <input type="number" placeholder="Precio Del Producto" id="txt_precioProducto_vProductoActualizarDatos" name="txt_precioProducto_vProductoActualizarDatos" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="seleectConcepto">Forma De Medir El Producto</label>
                                <select id="select_medidaProducto_vProductoActualizarDatos" name="select_medidaProducto_vProductoActualizarDatos" class="form-select">
                                    <option value="" selected disabled>---Medida Del Producto---</option>
                                    <?php foreach ($tiposMedida as $tipoMedida) { ?>
                                        <option value="<?php echo $tipoMedida->id_medida; ?>"><?php echo $tipoMedida->nombre_medida; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dineroApertura">Descripción Del Producto</label>
                                <textarea class="form-control" placeholder="Descripción Del Producto" id="txt_decripcionProducto_vProductoActualizarDatos" name="txt_decripcionProducto_vProductoActualizarDatos" rows="4" required></textarea>
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-success" value="Actualizar Datos De Producto" id="btn_actualizarDatosProducto_vProductoActualizarDatos" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scrip para actualizar los input a partir de la id del producto -->
        <script>
            $(document).ready(function() {
                $('#select_nombreProducto_vProductoActualizarDatos').change(function() {
                    var idProducto = $(this).val();
                    $.ajax({
                        url: "<?php echo base_url(); ?>index.php/cInventario/ccActualizar_vProductoActualizarDatos",
                        method: "POST",
                        async: true,
                        data: {
                            id_producto: idProducto
                        },
                        success: function(datosJson) {
                            //eliminar los [] de datosJson
                            datosJson = datosJson.replace("[", "");
                            datosJson = datosJson.replace("]", "");
                            //convertir datosJson en un objeto
                            var datos = JSON.parse(datosJson);
                            //asignar los valores de los datos al input
                            $('#txt_codigoBarra_vProductoActualizarDatos').val(datos.codigo_barra_producto);
                            $('#txt_precioProducto_vProductoActualizarDatos').val(datos.precio_producto);
                            $('#txt_decripcionProducto_vProductoActualizarDatos').val(datos.descripcion_producto);
                            $('#txt_nombreProducto_vProductoActualizarDatos').val(datos.nombre_producto);
                            $('#select_tipoProducto_vProductoActualizarDatos').val(datos.id_tipo_producto);
                            $('#select_medidaProducto_vProductoActualizarDatos').val(datos.id_medida_producto_producto);
                        },
                        error: function(error) {
                            alert(error + "error");
                        }
                    });
                });
            });
        </script>
    </body>


    </html>
</php>