<?php
require("funciones_bd_noticias.php");
$objbd = new FuncionesBDNoticias();
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

        if ($resultado->num_rows == 0) {
            echo ('
            
                <p align="center">
                    <i class="fa-solid fa-ghost fa-beat-fade fa-5x" style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.25;"></i><br><br>
                    Por el momento no hay noticias publicadas, sigue al pendiente para no perderte futuras actualizaciones.
                </p>
            ');
        } else {
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo ('
                        <div class="noticiaSuperior">
                            <div class="card">
                                <div class="card-bg">
                                    <img src="imagenes/notas/' . $row['imagen'] . '" alt="...">
                                </div>
                            <div class="card-context">
                            <div class="dark-bg"></div>
                                <h2>' . $row['titulo'] . '</h2>
                                <p>
                                    ' . $row['encabezado'] . '
                                </p>
                            <button><a href="noticia.php?idnoticia=' . $row['id_noticia'] . '">Leer más...</a></button>
                            </div>
                        </div>
                    ');
            }
        }


        ?>
        
    </main>
    <br><br><br><br><br><br><br><br>
    <div class="footer-basic" style="background-color: #021226;">
        <footer>
            <div class="social">
                <a href="#"><i class="fa-brands fa-instagram" style="color: #A9A7D9;"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp" style="color: #A9A7D9;"></i></i></a>
                <a href="#"><i class="fa-brands fa-twitter" style="color: #A9A7D9;"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f" style="color: #A9A7D9;"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php" style="color: #A9A7D9;">Home</a></li>
                <li class="list-inline-item"><a href="about.php" style="color: #A9A7D9;">About</a></li>
            </ul>
            <p class="copyright" style="color: #A9A7D9;">Hecho con <span>🧡</span> by <a href="https://github.com/xLUIS-H" style="color: #A9A7D9;">xLuis_H</a> © 2022</p>
        </footer>
    </div>
</body>
</html>