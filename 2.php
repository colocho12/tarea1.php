<?php
$numero1= $_POST["num1"];
$numero2= $_POST["num2"];
?>
<!DOCTYPE html>
<html>
    <header>
    </header>
    <body>
        <h1>Resultado de la suma</h1>
        <label>Resultado:</label><br>
        <p><?php echo $numero1 + $numero2; ?></p>
    </body>
</html>