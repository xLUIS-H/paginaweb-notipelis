<?php

require_once("../funciones_php_session.php");
require("../funciones_bd.php");
$objUserSession = new userSession();
$objbd = new FuncionesBD();
$objUserSession->iniciarSesion();
$objUserSession->verificarSesion();

$titulo = $_POST['titulo'];
$encabezado = $_POST['encabezado'];
$noticia = $_POST['noticia'];
$estado = $_POST['estado'];
$idMax = $_POST['idNoticia'];
$idNoticia = $idMax + 1;

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
    $fileImgTemp = $_FILES['imagen']['tmp_name'];
    $fileImgNombre = $_FILES['imagen']['name'];
    $fileImgTam = $_FILES['imagen']['size'];
    $fileImgTipo = $_FILES['imagen']['type'];

    if ($fileImgTam / 1024 / 1024 <= 15) {
        $fileImgNombreElementos = explode('.', $fileImgNombre);
        $fileExtension = strtolower(end($fileImgNombreElementos));

        $arrayExtensiones = array('jpg', 'jpeg', 'png');

        if (in_array($fileExtension, $arrayExtensiones)) {
            $fileImgNombreNuevo = $idNoticia . '_nota.' . $fileExtension;
            $fileImgNuevaPath = "../../../imagenes/notas/" . $fileImgNombreNuevo;
            // $fileImgNuevaPath = "/home/vhosts/www.notipelis.live/imagenes/notas/" . $fileImgNombreNuevo;

            if (move_uploaded_file($fileImgTemp, $fileImgNuevaPath)) {
                    $objbd->agregarNoticia($idNoticia, $titulo, $encabezado, $noticia, $fileImgNombreNuevo, $estado);
                    header('location: ../../loading-page-to-noticias.php?code=success');
            } else {
                echo ('ERROR AL CARGAR');
                header('location: ../../loading-page-to-noticias.php?code=error01');
            }
        } else {
            echo ('TIPO DE ARCHIVO NO PERMITIDO');
            header('location: ../../loading-page-to-noticias.php?code=error02');
        }
    } else {
        echo ('ARCHIVO DEMASIADO GRANDE');
        header('location: ../../loading-page-to-noticias.php?code=error03');
    }
} else {
    echo ('ARCHIVO NO SELECCIONADO');
    header('location: ../../loading-page-to-noticias.php?code=error04');
}
session_start();
$_SESSION["admin"] = true;

session_start();

$_SESSION['user'] = $usuario;



mysqli_free_result($resultado);
mysqli_close($conexion);

?>