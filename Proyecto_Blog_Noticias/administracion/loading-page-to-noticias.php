<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading...</title>
    <link rel="stylesheet" href="style-loading-page.css">
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader loader-outer">
            <div class="loader loader-inner">
            </div>
        </div>
    </div>
    
    <?php
        if ($_GET['code'] == 'success') {
            echo('
            <p>
                <h1>¡Noticia agregada correctamente!</h1>
            </p>
            ');
        } else if ($_GET['code'] == 'error01'){
            echo('
            <p>
                <h1>Error al cargar la imagen, noticia no agregada.</h1>
            </p>
            ');
        } else if ($_GET['code'] == 'error02'){
            echo('
            <p>
                <h1>Error, el tipo de archivo no está permitido, noticia no agregada.</h1>
            </p>
            ');
        } else if ($_GET['code'] == 'error03'){
            echo('
            <p>
                <h1>Error, el archivo es demasiado grande, noticia no agregada.</h1>
            </p>
            ');
        } else if ($_GET['code'] == 'error04'){
            echo('
            <p>
                <h1>Error, ningún archivo seleccionado, noticia no agregada.</h1>
            </p>
            ');
        }
        
    ?>

    <script>
        setTimeout("location.href='noticias.php'", 2500);
    </script>
</body>

</html>