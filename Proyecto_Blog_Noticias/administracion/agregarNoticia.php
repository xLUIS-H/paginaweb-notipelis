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
    <title>Añadir Administrador</title>
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>

    <?php
    require("menu-superior-navegacion.php")
        ?>

</head>

<body>
    <main class="mainAgregarAdmin" align="center">
        <form action="../administracion/funciones_php/funciones_noticias/funcion_agregar_noticia.php" method="post"
            enctype="multipart/form-data" autocomplete="off" onsubmit="return errorSubmit()" class="contenedorRegistro">
            <?php
            $resultado = $objbd->seleccionarNumeroMaximoNoticia();
            $row = mysqli_fetch_assoc($resultado);
            $maxId = $row['maximoIdNoticia'];

            if ($maxId == null) {
                $maxId = 0;
            }
            echo('
                <input type="hidden" name="idNoticia" value='.$maxId.'>
            ');
            ?>
            <input type="text" name="titulo" id="titulo" placeholder="Título" required>
            <textarea class="textAreaEncabezado" name="encabezado" id="noticia" placeholder="Encabezado"
                required></textarea>
            <textarea class="textAreaNoticia" name="noticia" id="noticia" placeholder="Noticia" required></textarea>
            <label for="">Agrega una imagen para la noticia.</label>
            <div>
                <input type="file" name="imagen" id="img" class="inputFile" required><br>
                <small class="alertaArchivo">Solo archivos en formato .jpg, .jpeg o png</small>
            </div>

            <select name="estado" id="estatus" required>
                <option value="" selected disabled>--Selecciona el estatus--</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
            <button type="reset" class="btnLimpiarAgregarAdmin">Limpiar Campos</button>
            <button type="submit" class="btnAgregarAdmin">Registrar Noticia</button>
        </form>
    </main>
</body>

</html>