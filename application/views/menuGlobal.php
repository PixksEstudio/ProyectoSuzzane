<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/JsBarcode.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/cajaScript.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylesMenu.css">
    <link rel="icon" type="image/x-ico" href="<?php echo base_url(); ?>assets/images/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
    <style>
        body {
            font-family: 'Amaranth', serif;
        }
    </style>
    <title>Mi Quesera</title>
</head>

<body style="height: 100%; background-image: -webkit-radial-gradient(
			rgba(0, 0, 0, 0.5),
			rgba(0, 0, 0, 0.5)
		),
		url(<?php echo base_url(); ?>assets/images/logo192.png);">
    <nav>
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <a href="<?php echo base_url(); ?>index.php/cInicio/ccInicio" class="nav-link">
                <span class="logo-name">Mi Quesera</span>
            </a>
        </div>

        <div class="sidebar">
            <div class="logo">
                <i class="bx bx-menu menu-icon"></i>
                <span class="logo-name">Mi Quesera</span>
            </div>

            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuCaja" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-cart icon'></i>
                                <span class="link">Caja</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: #046ca2;">
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cCaja/ccArqueoAbrir">Arqueo Caja</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cCaja/ccVenta">Ventas</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cCaja/ccHistorialVenta">Historial De Ventas</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuInventario" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-clipboard icon'></i>
                                <span class="link">Inventario</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: #046ca2;">
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cInventario/ccProductoExistencia">Producto: Actualizar Existencia En Inventario</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cInventario/ccProductoRegistrar">Producto: Registrar Nuevo Producto</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cInventario/ccProductoActualizar">Producto: Actualizar Datos De Producto Existente</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cInventario/ccTipoProducto">Tipos De Productos</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cInventario/ccVerInventario">Ver Inventario</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuCaja" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class='bx bx-wrench icon'></i>
                                <span class="link">Herramienta</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: #046ca2;">
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cHerramienta/ccCodigoBarra">Codigo De Barra</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/cHerramienta/ccReporte">Reportes</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <div class="bottom-cotent">
                    <li class="list">
                        <a href="<?php echo base_url(); ?>index.php/cConfiguracion/ccConfiguracion" class="nav-link">
                            <i class="bx bx-cog icon"></i>
                            <span class="link">Configuración</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="<?php echo base_url(); ?>index.php/cSesion/ccCerrar" class="nav-link">
                            <i class="bx bx-log-out icon"></i>
                            <span class="link">Cerrar Sesión</span>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <section class="overlay"></section>

    <script>
        const navBar = document.querySelector("nav"),
            menuBtns = document.querySelectorAll(".menu-icon"),
            overlay = document.querySelector(".overlay");

        menuBtns.forEach((menuBtn) => {
            menuBtn.addEventListener("click", () => {
                navBar.classList.toggle("open");
            });
        });

        overlay.addEventListener("click", () => {
            navBar.classList.remove("open");
        });
    </script>
</body>

</html>