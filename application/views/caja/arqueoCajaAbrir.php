<php>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <div style="height: 100vh;background-color: #fff;border: 2px solid #e5e7ec;border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 1em;">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 offset-xl-3">
                        <h1 class="text-center">Apertura De Caja</h1>
                        <form>
                            <div class="form-group">
                                <label for="dineroApertura">Dinero Inicial</label>
                                <input type="text" placeholder="Dinero Inical" id="dineroInicial" class="form-control">
                            </div>
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="fechaApertura">Fecha De Apertura</label>
                                    <input type="text" id="fechaApertura" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="horaApertura">Hora De Apertura</label>
                                    <input type="text" id="horaApertura" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="usuarioApertura">Usuario</label>
                                    <input type="text" id="usuarioApertura" class="form-control">
                                </div>
                            </fieldset>
                            <div class="form-group mt-4">
                                <input type="submit" class="btn btn-success" value="Abrir Caja">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        var year = new Date().getFullYear()
        var month = new Date().getMonth()
        var day = new Date().getDate()
        var hour = new Date().getHours()
        document.getElementById("fechaApertura").value = day + "/" + month + "/" + year
        document.getElementById("horaApertura").value = hour + ":" + new Date().getMinutes()
    </script>

    </html>
</php>