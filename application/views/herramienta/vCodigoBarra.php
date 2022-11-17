<php>
    <html>

    <body>
        <div class="container">
            <h1>Configuración</h1>
            <div class="contenerdorPrincipal">
                <div class="row">
                    <h1 class="text-center">Codigo De Barra</h1>
                    <div class="col-xl-6 col-sm-12">
                        <h1 class="text-center">Imagen</h1>
                        <div class="text-center mt-xl-5">
                            <img id="barcode" style="width: 200px; height: 200px;" />
                        </div>
                        <!-- Boton para descargar la imagen -->
                        <div class="form-group mt-4">
                            <input type="button" class="btn btn-success" value="Descargar Codigo De Barra" id="btn_descargarCodigoBarra_vCodigoBarra" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-12">
                        <h1 class="text-center">Codigo</h1>
                        <form class="mt-xl-5">
                            <div class="form-group">
                                <label for="dineroApertura">Codigo</label>
                                <input type="text" placeholder="Codigo" id="txt_codigo_vCodigoBarra" name="txt_codigo_vCodigoBarra" class="form-control" required />
                            </div>
                            <div class="form-group mt-4">
                                <input type="button" class="btn btn-success" value="Generar Codigo De Barra" id="btn_generarCodigoBarra_vCodigoBarra" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Script para pasar el codigo del input a la imagen y generar el codigo de barra -->
        <script>
            document.getElementById("btn_generarCodigoBarra_vCodigoBarra").addEventListener("click", function() {
                JsBarcode("#barcode", document.getElementById("txt_codigo_vCodigoBarra").value);
            });
        </script>

        <!-- Script para descargar la imagen -->
        <script>
            document.getElementById("btn_descargarCodigoBarra_vCodigoBarra").addEventListener("click", function() {
                var canvas = document.getElementById("barcode");
                var img = canvas.toDataURL("image/png");
                document.write('<img src="' + img + '"/>');
                var link = document.createElement('a');
                link.download = "CodigoDeBarra.png";
                link.href = img;
                link.click();
            });
        </script>
    </body>

    </html>
</php>