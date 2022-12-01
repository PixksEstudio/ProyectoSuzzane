<php>

	<body>
		<div class="container">
			<div class="contenerdorPrincipal">
				<div class="row">
					<div class="col-xl-6 col-sm-12">
						<!-- Carro de venta -->
						<div class="pt-xl-5">
							<div class="table-responsive">
								<table class="table table-bordered table-sm" id="tablaGeneral">
									<thead>
										<tr>
											<th scope="col">Codigo</th>
											<th scope="col">Concepto</th>
											<th scope="col">Cantidad</th>
											<th scope="col">Precio</th>
											<th scope="col">Descuento</th>
											<th scope="col">Importe</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
									<tfoot>
										<tr>
											<th scope="row">#</th>
											<td colspan="4">Subtotal</td>
											<td id="columnaSubtotal">0</td>
										</tr>
										<tr>
											<th scope="row">#</th>
											<td colspan="4">Impuesto</td>
											<td id="columnaImpuesto">0</td>
										</tr>
										<tr>
											<th scope="row">#</th>
											<td colspan="4">Total</td>
											<td id="columnaTotal">0</td>
										</tr>
									</tfoot>
								</table>
							</div>
							<div class="pt-3">
								<input type="button" value="Registrar Venta" class="btn btn-success" id="btnRegistrarTransaccion" />
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-sm-12">
						<!-- Añadir producto a carro de venta -->
						<h1 class="text-center">Venta</h1>
						<form>
							<fieldset disabled>
								<div class="form-group">
									<label for="txt_codigoBarra">Codigo De Barra</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Codigo De Barra" id="txt_codigoBarra" name="txt_codigoBarra">
										<button class="btn btn-outline-dark" type="button" id="btn_escanerCodigoBarra">Escanear Codigo De Barra</button>
									</div>
								</div>
							</fieldset>
							<div class="form-group">
								<label for="seleectConcepto">Concepto</label>
								<select id="seleectConcepto" class="form-select">
									<option value="" selected disabled>---Nombre Productos---</option>
									<!-- foreach  para llenar el select -->
									<?php foreach ($productos as $producto) { ?>
										<option value="<?php echo $producto->id_producto; ?>"><?php echo $producto->nombre_producto; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="dineroApertura">Cantidad</label>
								<input type="number" placeholder="Cantidad De Producto" id="txt_cantidad" class="form-control" min="1" max="100" />
							</div>
							<fieldset disabled>
								<div class="form-group">
									<label for="dineroApertura">Precio</label>
									<input type="number" placeholder="Precio Del Producto" id="txt_precio" class="form-control" step="any" />
								</div>
							</fieldset>
							<div class="form-group">
								<label for="dineroApertura">Descuento</label>
								<input type="number" placeholder="Monto Del Descuento" id="txt_descuento" class="form-control" value="0" />
							</div>
							<div class="form-group mt-4">
								<input type="submit" class="btn btn-success" value="Añadir Producto" id="btnAnadirProducto" />
							</div>
						</form>
						<!-- Cierre de caja -->
						<div class="text-end">
							<a href="<?php echo base_url(); ?>index.php/cCaja/ccArqueoCierre"><input type="button" class="btn btn-warning" value="Cerrar Caja" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<script>
			$(document).ready(function() {
				$('#seleectConcepto').change(function() {
					var id_producto = $(this).val();
					$.ajax({
						url: "<?php echo base_url(); ?>index.php/cCaja/ccActualizar_Ventas",
						method: "POST",
						async: true,
						data: {
							id_producto: id_producto
						},
						success: function(datosJson) {

							//eliminar los [] de datosJson
							datosJson = datosJson.replace("[", "");
							datosJson = datosJson.replace("]", "");

							//convertir datosJson en un objeto
							var datos = JSON.parse(datosJson);

							//asignar los valores de los atributos del objeto a los campos del formulario
							$('#txt_precio').val(datos.precio_producto);
							$('#txt_codigoBarra').val(datos.codigo_barra_producto);

							//Setear el maximo de la cantidad de productos
							$('#txt_cantidad').attr('max', datos.cantidad_producto);

						},
						error: function(error) {
							alert(error + "error");
						}
					});
				});
			});
		</script>

		<!-- Script para llenar la tabla con los datos del formulario -->
		<script>
			$(document).ready(function() {
				$("#btnAnadirProducto").click(function() {
					event.preventDefault();
					agregarFila();
				});


				function agregarFila() {
					//Obtener los valores de los campos del formulario
					var id_producto = $("#seleectConcepto").val();
					var nombre_producto = $("#seleectConcepto option:selected").text();
					var cantidad = $("#txt_cantidad").val();
					var precio = $("#txt_precio").val();
					var descuento = $("#txt_descuento").val();
					var codigo_barra = $("#txt_codigoBarra").val();
					var importe = (cantidad * precio) - descuento;
					//Agregar la fila a la tabla
					var htmlTags = '<tr> <td>' + codigo_barra + ' </td> <td> ' + nombre_producto + ' </td> <td> ' + cantidad + ' </td> <td> ' + precio + ' </td> <td> ' + descuento + ' </td> <td> ' + importe + ' </td> </tr>;'
					$('#tablaGeneral tbody').append(htmlTags);
				}
			});
		</script>
	</body>

	</html>
</php>