<?php

require_once("../funciones_php_session.php");
require("../funciones_bd.php");
$objUserSession = new userSession();
$objbd = new FuncionesBD();
$objUserSession->iniciarSesion();
$objUserSession->verificarSesion();

$usuario = $_POST['user'];
$estado = $_POST['estado'];

$addAdmin = $objbd->editarSuscriptor($usuario, $estado);

if ($addAdmin) {
    $codigo = 'success';
} else {
    $codigo = 'error';
}


header('location: ../../loading-page-to-subs.php?code='.$codigo.'');
session_start();

$_SESSION["admin"] = true;

$_SESSION['user'] = $usuario;
?>