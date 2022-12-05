<?php
class suscriptorSession
{
    public function __construct()
    {
        // session_start();
    }

    public function iniciarSesion() {
        session_start();
    }

    public function verificarSesion()
    {
        if (!isset($_SESSION["suscriptor"])) {
        } else {
            header('location: index.php');
            exit;
        }
    }

    public function closeSession()
    {
        session_unset();
        session_destroy();
    }
}
