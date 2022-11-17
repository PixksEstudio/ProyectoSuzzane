<php>


    <body>
        <div class="container">
            <div class="contenerdorPrincipal">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 offset-xl-3">
                        <h1 class="text-center">Apertura De Caja</h1>
                        <form method="POST" action="<?php echo base_url(); ?>index.php/cCaja/ccAbrirArqueo">
                            <div class="form-group">
                                <label for="txt_dineroInicial_vArqueoAbrir">Dinero Inicial</label>
                                <input type="number" placeholder="Dinero Inical" id="txt_dineroInicial_vArqueoAbrir" name="txt_dineroInicial_vArqueoAbrir" class="form-control" step="any">
                            </div>
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="txt_fechaApertura_vArqueoAbrir">Fecha De Apertura</label>
                                    <input type="text" id="txt_fechaApertura_vArqueoAbrir" name="txt_fechaApertura_vArqueoAbrir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txt_horaAperturaArqueoAbrir">Hora De Apertura</label>
                                    <input type="text" id="txt_horaAperturaArqueoAbrir" name="txt_horaAperturaArqueoAbrir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txt_usuarioApertura_vArqueoAbrir">Usuario</label>
                                    <input type="text" id="txt_usuarioApertura_vArqueoAbrir" name="txt_usuarioApertura_vArqueoAbrir" class="form-control" value="<?php echo $usuario ?>">
                                </div>
                            </fieldset>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-success" value="Abrir Caja" id="btn_abirCajar_vArqueoAbrir">
                            </div>
                            <?php
                            //Mostrar mensaje flashdata
                            if (isset($mensaje)) {
                                echo $mensaje;
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        document.getElementById("txt_fechaApertura_vArqueoAbrir").value = new Date().toLocaleDateString()
        document.getElementById("txt_horaAperturaArqueoAbrir").value = new Date().toLocaleTimeString()
    </script>

    </html>
</php>