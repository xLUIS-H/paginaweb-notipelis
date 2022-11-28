<?php
    require_once("funciones_php/funciones_php_session.php");
    $objUserSession = new userSession();
    // $objUserSession->iniciarSesion();
    $objUserSession->verificarSesion(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
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
                    <i class="fa-solid fa-gamepad fa-3x"></i>
                </a>
                <ul>
                    <li><a href="administradores.php">ADMINISTRADORES</a></li>
                    <li><a href="suscriptores.php">SUSCRIPTORES</a></li>
                    <li><a href="noticias.php">NOTICIAS</a></li>
                    <li>
                        <a href="funciones_php/logout.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>

</html>