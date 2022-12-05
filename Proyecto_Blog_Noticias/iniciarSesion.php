<?php
require("funciones_php_session.php");
$objSuscriptorSession = new suscriptorSession();
$objSuscriptorSession->iniciarSesion();
$objSuscriptorSession->verificarSesion();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aministracíon del Blog</title>
    <link rel="stylesheet" href="administracion/styles.css">
    <script src="funciones.js"></script>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/00a4986da9.js" crossorigin="anonymous"></script>

    <?php
    require("menu-superior-navegacion.php")
        ?>
</head>

<body>
    <main class="mainAgregarAdmin" align="center">
        <form action="funcion_iniciar_sesion.php" method="post" autocomplete="off" onsubmit="return errorSubmit()"
            class="contenedorRegistro">
            <p align="center" class="txtBienvenida">¡Bienvenido!</p>
            <p align="center"><i class="fa-solid fa-user fa-2xl"></i></p>
            <input type="text" name="user" id="usuarioLogin" class="inputUsuarioLogin" placeholder="Ingresa tu usuario"
                onfocus="ocultarErrorLogin()">
            <input type="password" name="pass" id="passwordLogin" class="inputPasswordLogin"
                placeholder="Ingresa tu contraseña" onfocus="ocultarErrorLogin()">
            <button type="submit" class="btnAgregarAdmin">Iniciar Sesión</button>
            <p style="font-size: 14px"><a href="registrarUsuario.php">¿No tienes una cuenta? Registrate aquí.</a></p>
            <br>
            <p style="font-size: 14px"><a href="/administracion">Iniciar sesión como administrador</a></p>
        </form>
    </main>
</body>

</html>