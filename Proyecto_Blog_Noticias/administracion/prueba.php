<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba PHP</title>
    <?php
        require("funciones.php")
    ?>
</head>

<body>
    <p>Prueba PHP</p>
    <?php
        // aa();        
        // echo(sumar(5,10));
        // echo("<br>Con manejo de strings, hacer una función que determine si una palabra es PALÍNDROMA")

        // Declaración de objetos de una clase
        $objOperaciones = new Operaciones();
        $objOperaciones->asignar(10,20);
        echo("<br>La suma es: ".$objOperaciones->sumar());
    ?>
</body>

</html>