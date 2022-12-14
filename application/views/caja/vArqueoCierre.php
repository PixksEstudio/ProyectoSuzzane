<php>

    <body>
        <div class="container">
            <div class="contenerdorPrincipal">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 offset-xl-3">
                        <h1 class="text-center">Cierre De Caja</h1>
                        <form>
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="dineroEfectivo">Dinero Efectivo</label>
                                    <input type="number" placeholder="Dinero Efectivo" id="dineroEfectivo" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="dineroTarjeta">Dinero Tarjeta</label>
                                    <input type="number" placeholder="Dinero Tarjeta" id="dineroTarjeta" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="dineroTotal">Total</label>
                                    <input type="number" placeholder="Total" id="dineroTotal" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fechaCierre">Fecha De Cierre</label>
                                    <input type="datetime" id="fechaCierre" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="horaCierre">Hora De Cierre</label>
                                    <input type="datetime" id="horaCierre" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="usuarioApertura">Usuario</label>
                                    <input type="text" id="usuarioApertura" class="form-control">
                                </div>
                            </fieldset>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-success" value="Cerrar Caja">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

   <script>
        document.getElementById("fechaCierre").value = new Date().toLocaleDateString()
        document.getElementById("horaCierre").value = new Date().toLocaleTimeString()
    </script>

    </html>
</php>