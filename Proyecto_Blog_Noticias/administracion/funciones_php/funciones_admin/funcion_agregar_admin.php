<?php

require_once("../funciones_php_session.php");
require("../funciones_bd.php");
$objUserSession = new userSession();
$objbd = new FuncionesBD();
$objUserSession->iniciarSesion();
$objUserSession->verificarSesion();

$usuario = $_POST['user'];
$password = $_POST['pass'];
$rfc = $_POST['rfc'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];

$addAdmin = $objbd->agregarAdministrador($usuario, $password, $rfc, $nombre, $estado);

if ($addAdmin) {
    $codigo = 'success';
} else {
    $codigo = 'error';
}


header('location: ../../loading-page-to-admins.php?code='.$codigo.'');
session_start();
$_SESSION["admin"] = true;

session_start();

$_SESSION['user'] = $usuario;



mysqli_free_result($resultado);
mysqli_close($conexion);

?>