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
    <script src="administracion/funciones.js"></script>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/00a4986da9.js" crossorigin="anonymous"></script>

    <?php
        require("menu-superior-navegacion.php")
    ?>
</head>

<body>
    <main class="mainAgregarAdmin" align="center">
        <form action="funcion_agregar_suscriptor.php" autocomplete="off" method="post" onsubmit="return errorSubmit()"
            class="contenedorRegistro">
            <label for="">Registrate.</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" onkeypress="return valideKeyLetras(event)"
                required>
            <input type="text" name="number" id="telefono" placeholder="Celular"
                onkeypress="return valideKeyNumeros(event)" required minlength="10" maxlength="10">
            <input type="email" name="email" id="correo" placeholder="Correo" onkeypress="" required>
            <input type="text" name="user" id="usuarioRegistro" placeholder="Usuario"
                onkeypress="return valideUsuario(event)" required>
            <input type="password" name="pass" id="passwordRegistro" placeholder="Contraseña" required minlength="8">
            <input type="password" name="pass" id="passwordVerify" placeholder="Verifica tu contraseña"
                onblur="mostrarErrorDiferentePassword()" required minlength="8">
            <small class="errorDiferentePassword" id="errorPassword">Las contraseñas no coinciden</small>
            <button type="reset" class="btnLimpiarAgregarAdmin">Limpiar Campos</button>
            <button type="submit" class="btnAgregarAdmin">Registrar</button>
            <input type="hidden" name="estado" value="1">
        </form>
    </main>
</body>

</html>