<?php
    require_once("funciones_php/funciones_php_session.php");
    $objUserSession = new userSession();
    $objUserSession->iniciarSesion();
    $objUserSession->verificarSesion(); 
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
    <title>Añadir Suscriptor</title>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>

    <?php
        require("menu-superior-navegacion.php")
    ?>
    
</head>

<body>
    <main class="mainAgregarAdmin" align="center">
        <form action="loading-page-to-admins.html" autocomplete="off" onsubmit="return errorSubmit()"
            class="contenedorRegistro">
            <input type="text" name="user" id="nombre" placeholder="Nombre" onkeypress="return valideKeyLetras(event)"
                required>
            <input type="text" name="number" id="telefono" placeholder="Celular"
                onkeypress="return valideKeyNumeros(event)" required>
            <input type="text" name="email" id="correo" placeholder="Correo" onkeypress="" required>
            <input type="text" name="dateAdd" id="fechaSuscripcion" placeholder="Fecha de Registro"
                onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')">
            <input type="text" name="user" id="usuarioRegistro" placeholder="Usuario"
                onkeypress="return valideUsuario(event)" required>
            <input type="password" name="pass" id="passwordRegistro" placeholder="Contraseña" required minlength="8">
            <input type="password" name="pass" id="passwordVerify" placeholder="Verifica tu contraseña"
                onblur="mostrarErrorDiferentePassword()" required minlength="8">
            <small class="errorDiferentePassword" id="errorPassword">Las contraseñas no coinciden</small>
            <select name="estatus" id="estatus" required>
                <option value="" selected disabled class="placeholderOptionEstatus">--Selecciona el estatus--</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
            <button type="reset" class="btnLimpiarAgregarAdmin">Limpiar Campos</button>
            <button type="submit" class="btnAgregarAdmin">Registrar Suscriptor</button>
        </form>
    </main>
</body>

</html>