<?php

require_once("../funciones_php_session.php");
require("../funciones_bd.php");
$objUserSession = new userSession();
$objbd = new FuncionesBD();
$objUserSession->iniciarSesion();
$objUserSession->verificarSesion();

$user = $_GET['usuario'];

$objbd->eliminarAdministrador($user);

header('location: ../../loading-page-to-admins.html');
session_start();

$_SESSION["admin"] = true;

$_SESSION['user'] = $usuario;



mysqli_free_result($resultado);
mysqli_close($conexion);

?>