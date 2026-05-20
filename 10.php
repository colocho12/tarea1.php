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
        <h1>Resultado del promedio</h1>
        <label>Resultado</label><br>
        <?php
        echo "El promedio del estudiante es: $promedio";
        ?>
    </body>
</html>