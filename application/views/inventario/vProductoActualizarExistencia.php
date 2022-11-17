<php>

    <body>
        <div class="container">
            <div class="contenerdorPrincipal">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 offset-xl-3">
                        <!-- Registrar Nuevo Producto -->
                        <h1 class="text-center">Actualizar Existencia De Producto</h1>
                        <form action="<?php echo base_url(); ?>index.php/cInventario/ccProductoActualizarExistenciaG" method="POST">
                            <div class="form-group">
                                <label for="txt_codigoBarra_vProductoExistencia">Codigo De Barra</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Codigo De Barra" id="txt_codigoBarra_vProductoExistencia" name="txt_codigoBarra_vProductoExistencia">
                                    <button class="btn btn-outline-dark" type="button" id="btn_escanerCodigoBarra">Escanear Codigo De Barra</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="select_nombreProducto_vProductoExistencia">Nombre Del Producto</label>
                                <select id="select_nombreProducto_vProductoExistencia" name="select_nombreProducto_vProductoExistencia" class="form-select">
                                    <option value="" selected disabled>---Nombre Productos---</option>
                                    <?php foreach ($productos as $producto) { ?>
                                        <option value="<?php echo $producto->id_producto; ?>"><?php echo $producto->nombre_producto; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="txt_cantidadActual_vProductoExistencia">Cantidad Actual</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="txt_cantidadActual_vProductoExistencia" id="txt_cantidadActual_vProductoExistencia">
                                        <span class="input-group-text" id="span_tipoMedidaActual_vProductoActualizarExistencia">Tipo De Medida</span>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label for="dineroApertura">Cantidad A Agregar</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="txt_cantidadAgregar_vProductoExistencia" name="txt_cantidadAgregar_vProductoExistencia" step="any">
                                    <span class=" input-group-text" id="span_tipoMedidaAgregar_vProductoActualizarExistencia">Tipo De Medida</span>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-success" value="Actualizar Existencia Producto" id="btn_actualizarExistenciaProducto_vProdcutoExistencia" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scrip para actualizar los input a partir de la id del producto -->
        <script>
            $(document).ready(function() {
                $('#select_nombreProducto_vProductoExistencia').change(function() {
                    var idProducto = $(this).val();
                    $.ajax({
                        url: "<?php echo base_url(); ?>index.php/cInventario/ccActualizar_vProductoActualizarExistencia",
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
                            //11:40pm del 11/16/2022 logre que funcionara, sigo sin comprender por que el echo me retornaba todo el html
                            //asignar los valores de los atributos del objeto a los input del formulario

                            //Cantidad Actual
                            $('#txt_cantidadActual_vProductoExistencia').val(datos.cantidad_producto);
                            //Codigo De Barra
                            $('#txt_codigoBarra_vProductoExistencia').val(datos.codigo_barra_producto);
                            //Tipo De Medida Actual
                            $('#span_tipoMedidaActual_vProductoActualizarExistencia').text(datos.nombre_medida);
                            //Tipo De Medida Agregar
                            $('#span_tipoMedidaAgregar_vProductoActualizarExistencia').text(datos.nombre_medida);
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