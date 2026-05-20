<?php
$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <h1>Resultado del numero menor o mayor</h1>
        <label>Resultado:</label><br>
        <?php
        if ($numero1 < $numero2) {
            echo "$numero1 es menor que $numero2";
        } else if ($numero1 > $numero2) {
            echo "$numero1 es mayor que $numero2";
        } else {
            echo "$numero1 y $numero2 son iguales";
        }
        ?>
    </body>
</html>