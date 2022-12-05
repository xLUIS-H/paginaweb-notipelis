<?php
require("funciones_php/funciones_php_session.php");
require("funciones_php/funciones_bd.php");
$objUserSession = new userSession();
$objbd = new FuncionesBD();
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
    <title>Editar Administrador</title>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>

    <?php
    require("menu-superior-navegacion.php")
        ?>

</head>

<body>

    <main class="mainAgregarAdmin" align="center">
        <form action="../administracion/funciones_php/funciones_admin/funcion_editar_admin.php" autocomplete="off"
            onsubmit="return errorSubmit()" class="contenedorRegistro" method="post">
            
            <?php
            $user = $_GET['usuario'];
            $resultado = $objbd->seleccionarAdministrador($user);
            $row = mysqli_fetch_assoc($resultado);
            ?>
                <input type="hidden" name="usuarioEditar" value=' . $user . '>
                <input type="text" name="rfc" id="rfc" placeholder="RFC" maxlength="13" minlength="13"
                    onkeypress="return valideKeyLetrasNumeros(event)" required class="inputRFC" value="<?=$row['rfc'];?>">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" onkeypress="return valideKeyLetras(event)"
                    required value="<?=$row['nombre'];?>">
                
                <input type="text" name="user" id="usuarioRegistro" placeholder="Usuario"
                    onkeypress="return valideUsuario(event)" required value="<?=$row['usuario'];?>" readonly>
                <input type="password" name="pass" id="passwordRegistro" placeholder="Contraseña" required minlength="8" value="<?=$row['password'];?>"'>
                <input type="password" name="pass" id="passwordVerify" placeholder="Verifica tu contraseña"
                    onblur="mostrarErrorDiferentePassword()" required minlength="8" value="<?=$row['password'];?>">
                <small class="errorDiferentePassword" id="errorPassword">Las contraseñas no coinciden</small>

            <?php
                if ($row['estado'] == 1) {
                    echo ('
                        <select name="estado" id="estatus" required>
                            <option value="" disabled>--Selecciona el estatus--</option>
                            <option selected value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    ');
                } else {
                    echo ('
                        <select name="estado" id="estatus" required>
                            <option value="" disabled>--Selecciona el estatus--</option>
                            <option value="1">Activo</option>
                            <option selected value="2">Inactivo</option>
                        </select>
                    ');
                }
            ?>
            <button type="reset" class="btnLimpiarAgregarAdmin">Limpiar Campos</button>
            <button type="submit" class="btnAgregarAdmin">Editar Cambios</button>
        </form>
    </main>
</body>

</html>