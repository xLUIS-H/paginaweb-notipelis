<?php
class FuncionesBDNoticias
{
    static private $conexion;

    public function __construct()
    {
        // FuncionesBDNoticias::$conexion = mysqli_connect('localhost', 'usuario', '1234', 'blognoticiasgaming');
        // FuncionesBDNoticias::$conexion = mysqli_connect("localhost", "1149442", "Neydi281101", "1149442");
        FuncionesBDNoticias::$conexion = mysqli_connect("localhost", "1149448", "Neydi281101", "1149448");

        if (!FuncionesBDNoticias::$conexion) {
            echo ("Error en la conexión a la base de datos");
            exit("Error en la conexion XD");
        }
    }
    public function seleccionarNoticias() {
        try {
            $sql = "SELECT * FROM noticias WHERE estado = 1";

            $resultado = mysqli_query(FuncionesBDNoticias::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function seleccionarNoticia($id_noticia) {
        try {
            $sql = "SELECT * FROM noticias WHERE id_noticia = '$id_noticia'";

            $resultado = mysqli_query(FuncionesBDNoticias::$conexion, $sql);

            return $resultado;
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function agregarSuscriptor($id_suscriptor, $nombre, $celular, $correo, $fecha_suscripcion, $usuario, $password, $estado) {
        try {
            $sql = "INSERT INTO suscriptores (id_suscriptor, nombre, celular, correo, fecha_suscripcion, usuario, password, estado) VALUES ('$id_suscriptor', '$nombre', '$celular', '$correo', '$fecha_suscripcion', '$usuario',  HEX(AES_ENCRYPT('$password','neydi28')), '$estado')";
            
            return mysqli_query(FuncionesBDNoticias::$conexion, $sql);
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

}
    
