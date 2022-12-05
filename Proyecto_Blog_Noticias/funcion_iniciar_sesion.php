<?php

$usuario = $_POST['user'];
$password = $_POST['pass'];
session_start();
$_SESSION['user'] = $usuario;

// $conexion = mysqli_connect("localhost", "usuario", "1234", "blognoticiasgaming");
// $conexion = mysqli_connect("localhost", "472908", "luisito28", "472908");
// $conexion = mysqli_connect("localhost", "1149442", "Neydi281101", "1149442");
$conexion = mysqli_connect("localhost", "1149448", "Neydi281101", "1149448");

$consulta = "SELECT * FROM suscriptores WHERE usuario ='$usuario' and password = HEX(AES_ENCRYPT('$password','neydi28')) and estado = 1";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if($filas) {
    session_start();
    $_SESSION["suscriptor"] = true;
    header('location: loading-page-to-index.php?code=login-success');
} else {
     echo "<script>
                alert('Comprueba tu usuario o contraseña');
                window.location= 'iniciarSesion.php'
    </script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>