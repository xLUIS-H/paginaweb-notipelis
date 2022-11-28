<?php
require("funciones_php/funciones_php_session.php");
require("funciones_php/funciones_bd.php");
$objUserSession = new userSession();
$objbd = new FuncionesBD();
$objUserSession->iniciarSesion();
$objUserSession->verificarSesion()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style-menu-nav.css">
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>

    <?php
    require("menu-superior-navegacion.php")
        ?>

</head>

<body>
    <main class="mainUsuarios">
        <p class="pTxtAdmin">NOTICIAS</p>
        <table width="100%" class="tablaListaAdmin">
            <tr>
                <td class="tdEncabezado">Noticia</td>
                <td class="tdEncabezado">Estado</td>
                <td class="tdEncabezado"></td>
                <td class="tdEncabezado"></td>
            </tr>

            <?php
            $resultado = $objbd->seleccionarNoticia();
            while ($row = mysqli_fetch_assoc($resultado)) {
                if ($row['estado'] == 1) {
                    $estado = "Activo";
                } else {
                    $estado = "Inactivo";
                }
                echo ('
                    <tr>
                        <td>' . $row['titulo'] . '</td>
                        <td>' . $estado . '</td>
                        <td><a href="editarNoticia.php?variable=valor"><i class="fa-solid fa-pencil"></i></a></i></td>
                        <td><i class="fa-solid fa-trash"></i></td>
                        
                    </tr>
                ');
            }
            ?>
        </table>
        <div class="divBtnRegistrarAdmin">
            <button class="btnRedireccionAgregarAdmin" onclick="location.href='agregarNoticia.php'">AGREGAR
                NOTICIA</button>
        </div>
    </main>
</body>

</html>