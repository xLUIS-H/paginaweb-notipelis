<?php

require_once("../funciones_php_session.php");
require("../funciones_bd.php");
$objUserSession = new userSession();
$objbd = new FuncionesBD();
$objUserSession->iniciarSesion();
$objUserSession->verificarSesion();

$idNoticia = $_GET['idNoticia'];

$addAdmin = $objbd->eliminarNoticia($idNoticia);

if ($addAdmin) {
    $codigo = 'delete';
} else {
    $codigo = 'error';
}


header('location: ../../loading-page-to-noticias.php?code='.$codigo.'');
session_start();

$_SESSION["admin"] = true;

$_SESSION['user'] = $usuario;



mysqli_free_result($resultado);
mysqli_close($conexion);

?>