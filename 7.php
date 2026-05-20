<?php
$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];
?>
<!DOCTYPE html>
<html>
    <header>
        <title>Resultado</title>
    </header>
    <body bgcolor="red">
        <h1>Resultado del numero mayor o menor</h1>
        <label>Resultado:</label><br>
        <?php
        if ($numero1 > $numero2) {
echo "$numero1 es mayor que $numero2";
        } elseif ($numero1 < $numero2) {
echo "$numero1 es menor que $numero2";
        } else {
echo "$numero1 es igual a $numero2";
        }
        ?>
    </body>
</html>
