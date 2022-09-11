<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Nº3 | Silvia Otaka</title>
</head>

<body>
    <h1>Trabajo Práctico Nº 3 - Potrero Backend</h1>

    <h3> 1. Crear una variable n y validar que sea un número positivo.</h3>
    <?php
    $randomNumber = rand(-10, 10);
    if ($randomNumber > 0) {
        echo "El número {$randomNumber} es positivo. ";
    } else {
        echo "El número {$randomNumber} no cumple con la condición.";
    }
    ?>
    <hr>

    <h3>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h3>
    <?php
    $randomNumber = rand(1, 15);
    if ($randomNumber > 1 && $randomNumber < 10) {
        echo "El número {$randomNumber} es mayor a 1 y menor a 10. ";
    } else {
        echo "El número {$randomNumber} no cumple con las condiciones.";
    }
    ?>

    <hr>

    <h3> 3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h3>
    <?php
    $randomNumber = rand(-15, 25);
    if ($randomNumber > 10 || $randomNumber < 2) {
        echo "El número {$randomNumber} es menor a 2 o mayor a 10. ";
    } else {
        echo "El número {$randomNumber} no cumple con las condiciones.";
    }
    ?>

    <hr>

    <h3>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. <br>
        → Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. <br>
        → Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división. <br>
        → Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h3>
    <?php
    $numero1 = rand(2, 6);
    $numero2 = rand(2, 6);
    if ($numero1 > $numero2) {
        echo "{$numero1} + {$numero2} = " . $numero1 + $numero2 . "<br>" .
            "{$numero1} - {$numero2} = " . $numero1 - $numero2 ;
    } elseif ($numero1 < $numero2) {
        echo  "{$numero1} * {$numero2} = " . $numero1 *  $numero2 . "<br>" .
            "{$numero1} / {$numero2} = " . $numero1 /  $numero2 . "<br>" .
            "{$numero1} % {$numero2} = " . $numero1 %  $numero2;
    } else{
        echo "{$numero1} y {$numero2} son iguales ";
    }
    ?>

    <footer style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: #b4d4f9; color: white; text-align: center; padding:15px; font-size:18px">
        <div class="container">
            <div class="copyright text-center">
                &copy; Copyright 2021-2022 |
                <strong><span>Silvia Otaka</span></strong> | Programming with ❤ <br />
            </div>
        </div>
    </footer>

</html>