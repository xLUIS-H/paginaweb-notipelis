<?php
    require_once("funciones_php/funciones_php_session.php");
    $objUserSession = new userSession();
    $objUserSession->iniciarSesion();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style-menu-nav.css">
    <script src="funciones.js"></script>
    <title>Añadir Administrador</title>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>

    <?php
        require("menu-superior-navegacion.php")
    ?>

</head>

<body>
    <main class="mainAgregarAdmin" align="center">
        <form action="../administracion/funciones_php/funciones_admin/funcion_agregar_admin.php" method="post" autocomplete="off" onsubmit="return errorSubmit()"
            class="contenedorRegistro">
            <input type="text" name="rfc" id="rfc" placeholder="RFC" maxlength="13" minlength="13"
                onkeypress="return valideKeyLetrasNumeros(event)" required class="inputRFC">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" onkeypress="return valideKeyLetras(event)"
                required>
            <input type="text" name="user" id="usuarioRegistro" placeholder="Usuario"
                onkeypress="return valideUsuario(event)" required>
            <input type="password" name="pass" id="passwordRegistro" placeholder="Contraseña"
                onblur="mostrarErrorDiferentePassword()" required minlength="8">
            <input type="password" name="pass" id="passwordVerify" placeholder="Verifica tu contraseña"
                onblur="mostrarErrorDiferentePassword()" required minlength="8">
            <small class="errorDiferentePassword" id="errorPassword">Las contraseñas no coinciden</small>
            <select name="estado" id="estatus" required>
                <option value="" selected disabled>--Selecciona el estatus--</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
            <button type="reset" class="btnLimpiarAgregarAdmin">Limpiar Campos</button>
            <button type="submit" class="btnAgregarAdmin">Registrar Administrador</button>
        </form>
    </main>
</body>

</html>