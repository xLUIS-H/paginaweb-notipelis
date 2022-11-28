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
    <title>Editar Suscriptor</title>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>

    <?php
        require("menu-superior-navegacion.php")
    ?>
    
</head>

<body>
    <main class="mainAgregarAdmin" align="center">
    <form action="loading-page-to-admins.html" autocomplete="off" onsubmit="return errorSubmit()"
            class="contenedorRegistro">
                <input type="text" name="titulo" id="titulo" placeholder="Título" required>
                <textarea class="textAreaEncabezado" name="noticia" id="noticia" placeholder="Encabezado" required ></textarea>
                <textarea class="textAreaNoticia" name="noticia" id="noticia" placeholder="Noticia" required ></textarea>
                <input type="file" name="imagen" id="img" class="inputFile">
                <select name="estatus" id="estatus" required>
                    <option value="" selected disabled>--Selecciona el estatus--</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
                <button type="reset" class="btnLimpiarAgregarAdmin">Limpiar Campos</button>
                <button type="submit" class="btnAgregarAdmin">Guardar Cambios</button>
        </form>
    </main>
</body>

</html>