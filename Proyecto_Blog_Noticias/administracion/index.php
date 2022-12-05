<?php
    require("funciones_php/funciones_php_session.php");
    require("funciones_php/funciones_bd.php");
    $objUserSession = new userSession();
    $objUserSession->iniciarSesion();

    $objFuncionesBD = new FuncionesBD();
    $objFuncionesBD->contarAdministradores();

    $resultado = $objFuncionesBD->contarAdministradores();
    
    // //usa indices
    // $row = mysqli_fetch_row($resultado);
    // echo($row[0]);

    //usa el nombre del campo
    $row = mysqli_fetch_assoc($resultado);
    // echo($row['admins']);

    if($row['admins'] == 0) {
        header('location: agregarPrimerAdmin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aministracíon del Blog</title>
    <link rel="stylesheet" href="styles.css">
    <script src="funciones.js"></script>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/00a4986da9.js" crossorigin="anonymous"></script>
</head>

<body class="bodyLogin">
    <form action="../database/validar.php" onsubmit="return inicioSesion()" autocomplete="off" class="contenedorLogin" method="post">
            <p align="center" class="txtBienvenida">¡Bienvenido!</p>
            <p align="center"><i class="fa-solid fa-user"></i></p>
            <input type="text" name="user" id="usuarioLogin" class="inputUsuarioLogin" placeholder="Ingresa tu usuario"
                onfocus="ocultarErrorLogin()">
            <input type="password" name="pass" id="passwordLogin" class="inputPasswordLogin"
                placeholder="Ingresa tu contraseña" onfocus="ocultarErrorLogin()">

            <small class="errorLogin" id="errorLogin">
                *Nombre de usuario o contraseña incorrectos.
            </small>
            <button type="submit" class="btnSubmit">Iniciar Sesión</button>

    </form>
</body>

</html>