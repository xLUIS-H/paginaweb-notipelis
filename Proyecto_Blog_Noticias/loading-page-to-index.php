<?php
require("funciones_php_session.php");
$objSuscriptorSession = new suscriptorSession();
$objSuscriptorSession->iniciarSesion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading...</title>
    <link rel="stylesheet" href="administracion/style-loading-page.css">
    <script src="https://kit.fontawesome.com/00a4986da9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="loader-wrapper">
        <div class="loader loader-outer">
            <div class="loader loader-inner">
            </div>
        </div>
    </div>

    <?php
            switch ($_GET['code']) {
                case 'error':
                    $codigoError = '<br>Error.<br><br> Operación no realizada.<br>';
                    break;
                case 'success':
                        $codigoError = '<br>¡Hecho!<br><br> Operación realizada correctamente.<br>';
                        break;
                case 'error-1062':
                        $codigoError = '<br>Error.<br><br> El usuario ya existe, por favor, escoja uno diferente.<br>';
                default:
                    $codigoError = '<br>Iniciando sesión...<br>';
                    break;
            }

            if ($_GET['code'] == 'success') {
                $icono = '<i class="fa-solid fa-check fa-bounce"></i>';
                $clase = 'content-buttons-success';
            } else if ($_GET['code'] == 'error') {
                $icono = '<i class="fa-solid fa-xmark fa-shake"></i>';
                $clase = 'content-buttons-error';
            } else {
                $icono = '<i class="fa-solid fa-spinner fa-spin-pulse"></i>';
                $clase = 'content-buttons-login';
            }
            
            echo('
                <div class="window-notice" id="window-notice">
                    <div class="content">
                        <div class="'.$clase.'">
                            <a>'.$icono.'</a>
                        </div>
                        <div class="content-text">
                            '.$codigoError.'
                        </div>
                    </div>
                </div>
            ');
        
        ?>

    <script>
        setTimeout("location.href='index.php'", 2000);
    </script>
</body>
</html>