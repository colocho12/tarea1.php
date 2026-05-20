<?php
$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$numero3 = $_POST['num3'];
$promedio= ($numero1 + $numero2 + $numero3) / 3;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>promedio</title>
    </head>
    <body>
        <h1>Resultado del promedio final</h1>
        <label>Resultado final:</label><br>
        <?php
        if ($promedio > 6) {
            echo "El estudiante aprobó con un promedio de: $promedio";
        } else {
            echo "El estudiante reprobó con un promedio de: $promedio";
        }