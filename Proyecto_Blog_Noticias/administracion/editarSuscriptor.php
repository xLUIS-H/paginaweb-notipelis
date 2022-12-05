<?php
require_once("funciones_php/funciones_php_session.php");
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
    <title>Editar Suscriptor</title>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>

    <?php
    require("menu-superior-navegacion.php")
        ?>

</head>

<body>
    <main class="mainAgregarAdmin" align="center">
        <form action="../administracion/funciones_php/funciones_suscriptor/funcion_editar_suscriptor.php" method="post"
            autocomplete="off" onsubmit="return errorSubmit()" class="contenedorRegistro">

            <?php
            $user = $_GET['usuario'];
            $resultado = $objbd->seleccionarSuscriptor($user);
            $row = mysqli_fetch_assoc($resultado);
            ?>

            <input type="text" name="nombre" id="nombre" placeholder="Nombre" onkeypress="return valideKeyLetras(event)"
                required readonly value="<?=$row['nombre'];?>">
            <input type="text" name="number" id="telefono" placeholder="Celular"
                onkeypress="return valideKeyNumeros(event)" required minlength="10" maxlength="10" readonly value="<?=$row['celular'];?>">
            <input type="email" name="email" id="correo" placeholder="Correo" onkeypress="" required readonly value="<?=$row['correo'];?>">
            <input type="text" name="user" id="usuarioRegistro" placeholder="Usuario"
                onkeypress="return valideUsuario(event)" required readonly value="<?=$row['usuario'];?>">
            <input type="password" name="pass" id="passwordRegistro" placeholder="Contraseña" required minlength="8" readonly value="<?=$row['password'];?>">
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

            <button type="submit" class="btnAgregarAdmin">Guardar Cambios</button>
        </form>
    </main>
</body>

</html>