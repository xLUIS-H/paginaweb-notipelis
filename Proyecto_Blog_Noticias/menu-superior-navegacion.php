<?php
require_once("funciones_php_session.php");
$objSuscriptorSession = new suscriptorSession();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesUsuario.css">
    <link rel="stylesheet" href="style-menu-nav.css">
    <script src="funciones.js"></script>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <!-- Menú de navegación -->
        <div class="contenedor-header">
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa-solid fa-bars"></i>
                </label>
                <a href="#" class="enlace">
                    <!-- <img src="iconos/icons8-control-96.png" alt="" class="logo"> -->
                    <i class="fa-solid fa-film fa-2x" style="color: #A9A7D9;"></i>
                </a>
                <ul>
                    <li><a href="index.php">INICIO</a></li>
                    <?php
                    if (isset($_SESSION["suscriptor"])) {
                        echo ('
                            <li>
                            <abbr title="Cerrar Sesión">
                                <a href="logout.php">
                                <i class="fa-solid fa-power-off" style="color: #A9A7D9;"></i>
                                </a>
                            </abbr>
                            </li>
                        ');
                    } else {
                        echo ('
                    <li>
                    <abbr title="Iniciar Sesión">
                        <a href="iniciarSesion.php">
                        <i class="fa-regular fa-user fa-lg" style="color: #A9A7D9;"></i>
                        </a>
                    </abbr>
                    </li>
                    ');
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
</body>

</html>