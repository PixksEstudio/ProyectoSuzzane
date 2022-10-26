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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylesMenu.css">
    <link rel="icon" type="image/x-ico" href="<?php echo base_url(); ?>assets/images/favicon.ico">
    <title>Mi Quesera</title>
</head>

<body style="background-image: -webkit-radial-gradient(
			rgba(0, 0, 0, 0.5),
			rgba(0, 0, 0, 0.5)
		),
		url(<?php echo base_url(); ?>assets/images/logo192.png);">
    <nav>
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <a href="<?php echo base_url(); ?>index.php/ControladorInicio/index" class="nav-link">
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
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/ControladorCaja/index">Arqueo Caja</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/ControladorCaja/venta">Ventas</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>index.php/ControladorCaja/verVenta">Ver Ventas</a></li>
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
                                <li><a class="dropdown-item" href="#">Producto</a></li>
                                <li><a class="dropdown-item" href="#">Categoria De Producto</a></li>
                                <li><a class="dropdown-item" href="#">Ver Inventario</a></li>
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
                                <li><a class="dropdown-item" href="#">Crear Codigo De Barra</a></li>
                                <li><a class="dropdown-item" href="#">Exportar Inventario</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <div class="bottom-cotent">
                    <li class="list">
                        <a href="#" class="nav-link">
                            <i class="bx bx-cog icon"></i>
                            <span class="link">Configuración</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="<?php echo base_url(); ?>index.php/ControladorLogin/index" class="nav-link">
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