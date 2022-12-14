<?php
require("funciones_php/funciones_php_session.php");
$objUserSession = new userSession();
$objUserSession->iniciarSesion();
$objUserSession->verificarSesion();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading...</title>
    <link rel="stylesheet" href="style-loading-page.css">
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
                case 'error01':
                    $codigoError = '<br>Error al cargar la imagen.<br><br> Noticia no agregada.<br>';
                    break;
                case 'error02':
                    $codigoError = '<br>Error: El tipo de archivo no está permitido.<br><br> Noticia no agregada.<br>';
                    break;
                case 'error03':
                    $codigoError = '<br>Error: El archivo es demasiado grande.<br><br> Noticia no agregada.<br>';
                    break;
                case 'error04':
                    $codigoError = '<br>Error: Ningún archivo seleccionado.<br><br> Noticia no agregada.<br>';
                    break;
                case 'delete' :
                    $codigoError = '<br>Noticia eliminada correctamente.<br>';
                    break;
                default:
                    $codigoError = '<br>Noticia agregada correctamente.<br>';
                    break;
            }

            if ($_GET['code'] == 'success' || $_GET['code'] == 'delete') {
                $icono = '<i class="fa-solid fa-check fa-bounce"></i>';
                $clase = 'content-buttons-success';
            } else {
                $icono = '<i class="fa-solid fa-xmark fa-shake"></i>';
                $clase = 'content-buttons-error';
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
        setTimeout("location.href='noticias.php'", 2000);
    </script>
</body>

</html>