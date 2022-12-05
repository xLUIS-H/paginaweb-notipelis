<?php
class FuncionesBD
{
    static private $conexion;

    public function __construct()
    {
        // FuncionesBD::$conexion = mysqli_connect('localhost', 'usuario', '1234', 'blognoticiasgaming');
        // FuncionesBD::$conexion = mysqli_connect("localhost", "1149442", "Neydi281101", "1149442");
        FuncionesBD::$conexion = mysqli_connect("localhost", "1149448", "Neydi281101", "1149448");

        if (!FuncionesBD::$conexion) {
            echo ("Error en la conexión a la base de datos");
            exit("Error en la conexion XD");
        }
    }

    public function contarAdministradores()
    {
        try {
            $sql = "SELECT COUNT(usuario) AS admins FROM administradores";

            $resultado = mysqli_query(FuncionesBD::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function seleccionarAdministradores() {
        try {
            $sql = "SELECT * FROM administradores";

            $resultado = mysqli_query(FuncionesBD::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function seleccionarSuscriptores() {
        try {
            $sql = "SELECT * FROM suscriptores";

            $resultado = mysqli_query(FuncionesBD::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function seleccionarAdministrador($user) {
        try {
            $sql = "SELECT usuario, AES_DECRYPT(UNHEX(password), 'neydi28') AS password, rfc,nombre,estado FROM administradores WHERE usuario = '$user'";
            $resultado = mysqli_query(FuncionesBD::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function agregarAdministrador($usuario, $password, $rfc, $nombre, $estado) {
        try {
            $sql = "INSERT INTO administradores (usuario, password, rfc, nombre, estado) VALUES ('$usuario',  HEX(AES_ENCRYPT('$password','neydi28')), '$rfc', '$nombre', '$estado')";
            return mysqli_query(FuncionesBD::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function editarAdministrador($usuario, $password, $rfc, $nombre, $estado) {
        try {
            $sql = "UPDATE administradores SET password = HEX(AES_ENCRYPT('$password','neydi28')), rfc = '$rfc', nombre = '$nombre', estado = '$estado' WHERE usuario = '$usuario'";
            return mysqli_query(FuncionesBD::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function eliminarAdministrador($user) {
        try {
            $sql = "DELETE FROM administradores WHERE usuario = '$user'";
            return mysqli_query(FuncionesBD::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function comprobarUsuario($user) {
        try {
            $sql = "SELECT * FROM administradores WHERE usuario = '$user'";

            $resultado = mysqli_query(FuncionesBD::$conexion, $sql);

            // return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function seleccionarNoticias() {
        try {
            $sql = "SELECT * FROM noticias";

            $resultado = mysqli_query(FuncionesBD::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function seleccionarNoticia($id_noticia) {
        try {
            $sql = "SELECT * FROM noticias WHERE id_noticia = '$id_noticia'";

            $resultado = mysqli_query(FuncionesBD::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function seleccionarNumeroMaximoNoticia() {
        try {
            $sql = "SELECT MAX(id_noticia) as maximoIdNoticia FROM noticias";

            $resultado = mysqli_query(FuncionesBD::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function agregarNoticia($id_noticia, $titulo, $encabezado, $noticia, $imagen, $estado) {
        try {
            $sql = "INSERT INTO noticias (id_noticia, titulo, encabezado, noticia, imagen, estado) VALUES ('$id_noticia', '$titulo',  '$encabezado', '$noticia', '$imagen', '$estado')";
            return mysqli_query(FuncionesBD::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function editarNoticia($idNoticia, $titulo, $encabezado, $noticia, $fileImgNombreNuevo, $estado) {
        try {
            $sql = "UPDATE noticias SET titulo = '$titulo', encabezado = '$encabezado', noticia = '$noticia', imagen = '$fileImgNombreNuevo', estado = '$estado' WHERE id_noticia = '$idNoticia'";
            mysqli_query(FuncionesBD::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function editarNoticiaImagen($idNoticia, $titulo, $encabezado, $noticia, $estado) {
        try {
            $sql = "UPDATE noticias SET titulo = '$titulo', encabezado = '$encabezado', noticia = '$noticia', estado = '$estado' WHERE id_noticia = '$idNoticia'";
            mysqli_query(FuncionesBD::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function eliminarNoticia($idNoticia) {
        try {
            $sql = "DELETE FROM noticias WHERE id_noticia = '$idNoticia'";
            return mysqli_query(FuncionesBD::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function seleccionarSuscriptor($user) {
        try {
            $sql = "SELECT nombre, celular, correo, usuario, AES_DECRYPT(UNHEX(password), 'neydi28') AS password, estado FROM suscriptores WHERE usuario = '$user'";
            $resultado = mysqli_query(FuncionesBD::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }


    public function editarSuscriptor($usuario, $estado) {
        try {
            $sql = "UPDATE suscriptores SET estado = '$estado' WHERE usuario = '$usuario'";
            return mysqli_query(FuncionesBD::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
    
    public function eliminarSuscriptor($user) {
        try {
            $sql = "DELETE FROM suscriptores WHERE usuario = '$user'";
            return mysqli_query(FuncionesBD::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
}
    
