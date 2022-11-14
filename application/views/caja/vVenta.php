<php>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
	</head>

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
											<td>0</td>
										</tr>
										<tr>
											<th scope="row">#</th>
											<td colspan="4">Impuesto</td>
											<td>0</td>
										</tr>
										<tr>
											<th scope="row">#</th>
											<td colspan="4">Total</td>
											<td>0</td>
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
							<div class="form-group">
								<label for="dineroApertura">Codigo</label>
								<input type="text" placeholder="Codigo De Producto" id="dineroInicial" class="form-control" />
							</div>
							<!--<div class="form-group">
									<p id="passwordHelpBlock" class="form-text text-muted">
										O tambien puedes escanear el codigo de barra:
									</p>
									<a class="stretched-link" href="#">
										<h1 class="bx bx-barcode-reader"></h1>
									</a>
								</div>-->
							<!-- aca va una imagen de un codigo de barra-->
							<div class="form-group">
								<label for="seleectConcepto">Concepto</label>
								<select id="seleectConcepto" class="form-select">
									<option>---Nombre Productos---</option>
								</select>
							</div>
							<div class="form-group">
								<label for="dineroApertura">Cantidad</label>
								<input type="number" placeholder="Cantidad De Producto" id="dineroInicial" class="form-control" min="1" max="100" />
							</div>
							<div class="form-group">
								<label for="dineroApertura">Precio</label>
								<input type="number" placeholder="Precio Del Producto" id="dineroInicial" class="form-control" />
							</div>
							<div class="form-group">
								<label for="dineroApertura">Descuento</label>
								<input type="number" placeholder="Precio Del Producto" id="dineroInicial" class="form-control" />
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
	</body>

	</html>
</php>