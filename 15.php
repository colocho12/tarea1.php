<?php
$Celsius = $_POST['c'];
$Fahrenheit = ($Celsius * 9/5) + 32;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resultados</title>
    </head>
    <body>
        <h1><strong>Resultado</strong></h1>
        <p><?php echo $Celsius; ?>°C es igual a <?php echo $Fahrenheit; ?>°F.</p>
    </body>