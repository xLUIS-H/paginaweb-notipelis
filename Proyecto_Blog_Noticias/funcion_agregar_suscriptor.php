<?php
require("funciones_bd_noticias.php");
$objbd = new FuncionesBDNoticias();

$id_suscriptor = '1';
$nombre = $_POST['nombre'];
$celular = $_POST['number'];
$correo = $_POST['email'];
$fecha_suscripcion = date('y-m-d');
$usuario = $_POST['user'];
$password = $_POST['pass'];
$estado = $_POST['estado'];


$addSus = $objbd->agregarSuscriptor($id_suscriptor, $nombre, $celular, $correo, $fecha_suscripcion, $usuario, $password, $estado);


if ($addSus) {
    $codigo = 'success';
} else {
    $codigo = 'error';
}


header('location: loading-page-to-index.php?code='.$codigo.'');

session_start();



mysqli_free_result($resultado);
mysqli_close($conexion);

?>