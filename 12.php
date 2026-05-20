<?php
$base= $_POST["base"];
$altura= $_POST["altura"];
$area= ( $base * $altura )/ 2;
?>
<!DOCTYPE html>
<html>
    <header>
        <title>Resultados</title>
    </header>
    <body>
        <h1><strong>Resultado del area del triangulo</h1></strong>
        <p>El area del triangulo es: <?php echo $area; ?></p>
    </body>
</html>