<php>

    <html>

    <body>
        <div class="container">
            <div class="contenerdorPrincipal">
                <div class="row">
                    <div class="col-10 offset-xl-1">
                        <table class="table table-bordered" id="tablaGeneral">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Codigo De Barra</th>
                                    <th scope="col">Nombre Producto</th>
                                    <th scope="col">Descripción Producto</th>
                                    <th scope="col">Precio Producto</th>
                                    <th scope="col">Existencia</th>
                                    <th scope="col">Tipo Medida</th>
                                    <th scope="col">Tipo Producto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Carga de inventario -->
                                <?php foreach ($productos as $producto) { ?>
                                    <tr>
                                        <td><?php echo $producto->id_producto; ?></td>
                                        <td><?php echo $producto->codigo_barra_producto; ?></td>
                                        <td><?php echo $producto->nombre_producto; ?></td>
                                        <td><?php echo $producto->descripcion_producto; ?></td>
                                        <td><?php echo $producto->precio_producto; ?></td>
                                        <td><?php echo $producto->cantidad_producto; ?></td>
                                        <td><?php echo $producto->nombre_medida; ?></td>
                                        <td><?php echo $producto->nombre_tipo_producto; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
    </body>

    </html>
</php>