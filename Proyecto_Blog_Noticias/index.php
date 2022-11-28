<?php
require("funciones_bd_noticias.php");
$objbd = new FuncionesBDNoticias();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="stylesUsuario.css">
    <link rel="stylesheet" href="style-menu-nav.css">
    <link rel="stylesheet" href="styles-cards.css">
    <script src="https://kit.fontawesome.com/bafeac60c3.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <?php
    require("menu-superior-navegacion.php")
        ?>
</head>

<body>
    <main class="mainUsuarios">

        <?php
        $resultado = $objbd->seleccionarNoticias();
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo ('
                    <div class="noticiaSuperior">
                        <div class="card">
                            <div class="card-bg">
                                <img src="imagenes/notas/'.$row['imagen'].'" alt="...">
                            </div>
                        <div class="card-context">
                        <div class="dark-bg"></div>
                            <h2>' . $row['titulo'] . '</h2>
                            <p>
                                ' . $row['encabezado'] . '
                            </p>
                        <button><a href="noticia.php?idnoticia='.$row['id_noticia'].'">Leer más...</button>
                        </div>
                    </div>
                ');
        }
        ?>
        <footer>
            PIE DE PÁGINA CON DATOS INCLUIDOS
        </footer>
    </main>
</body>

</html>