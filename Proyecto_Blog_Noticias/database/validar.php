<?php

$usuario = $_POST['user'];
$password = $_POST['pass'];
session_start();
$_SESSION['user'] = $usuario;

$conexion = mysqli_connect("localhost", "usuario", "1234", "blognoticiasgaming");
// $conexion = mysqli_connect("localhost", "472908", "luisito28", "472908");
// $conexion = mysqli_connect("localhost", "1149442", "Neydi281101", "1149442");
// $conexion = mysqli_connect("localhost", "1149448", "Neydi281101", "1149448");

$consulta = "SELECT * FROM administradores WHERE usuario ='$usuario' and password = HEX(AES_ENCRYPT('$password','neydi28')) and estado = 1";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if($filas) {
    header('location: ../administracion/loading-page-to-admins.html');
    session_start();
    $_SESSION["admin"] = true;
} else {
     echo "<script>
                alert('Comprueba tu usuario o contraseña');
                window.location= '../administracion/index.php'
    </script>";
    // header('location: ../administracion/index.php');
    
    
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>