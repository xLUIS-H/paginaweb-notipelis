<?php
    // $edad = 2;

    // function aa() {
    //     global $edad;
    //     $edad = $edad * 2;
    //     echo($edad);
    // }

    // function sumar($num, $num2) {
    //     return $num + $num2;
    // }
    
    class Operaciones{
        var $num1;
        var $num2;

        function __construct() {
            $this->num1 = 0;
            $this->num2 = 0;
            echo("Constructor ".$this->num1." ".$this->num2);
        }

        function asignar($n1, $n2) {
            $this->num1 = $n1;
            $this->num2 = $n2;
            echo("Asignar ".$this->num1." ".$this->num2);
        }

        function sumar() {
            return $this->num1 + $this->num2;
        }
    }

    if (isset($_POST["nombre"])) {
        if(strlen($_POST["nombre"])) {
            echo("Hola ".$_POST["nombre"]);
        } else {
            echo("Variable vacía");
        }
    } else {
        echo("Variable no existente");
    }
    
?>