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
    <title>Aministradores</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style-menu-nav.css">
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>
    <?php
    require("menu-superior-navegacion.php")
    ?>
</head>

<body>

    <main class="mainUsuarios">
        <p class="pTxtAdmin">ADMINISTRADORES</p>
        <table width="100%" class="tablaListaAdmin">
            <tr>
                <td class="tdEncabezado">RFC</td>
                <td class="tdEncabezado">Nombre</td>
                <td class="tdEncabezado">Usuario</td>
                <td class="tdEncabezado">Estado</td>
                <td class="tdEncabezado"></td>
                <td class="tdEncabezado"></td>
            </tr>

            <?php
            $resultado = $objbd->seleccionarAdministradores();
            while ($row = mysqli_fetch_assoc($resultado)) {
                if ($row['estado'] == 1) {
                    $estado = "Activo";
                } else {
                    $estado = "Inactivo";
                }
                echo ('
                    <tr>
                        <td class="inputRFC">' . $row['rfc'] . '</td>
                        <td>' . $row['nombre'] . '</td>
                        <td>' . $row['usuario'] . '</td>
                        <td>'.$estado.'</td>
                        <td><a href="editarAdmin.php?usuario='.$row['usuario'].'"><i class="fa-solid fa-pencil"></i></a></i></td>
                        <td><a onclick="return confirm(\'¿Desea eliminar el administrador '.$row['nombre'].'?\');" href="funciones_php/funciones_admin/funcion_eliminar_admin.php?usuario='.$row['usuario'].'"><i class="fa-solid fa-trash"></i></td>
                        
                    </tr>
                ');
            }
            ?>
        </table>
        <div class="divBtnRegistrarAdmin">
            <button class="btnRedireccionAgregarAdmin" onclick="location.href='agregarAdmin.php'">AGREGAR
                ADMINISTRADOR</button>
        </div>
    </main>
</body>

</html>