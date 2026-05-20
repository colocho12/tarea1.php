<?php
$precio = $_POST["precio"];
$total = $precio * 1.13;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <h1>El total con IVA incluido es: <?php echo $total; ?></h1>
    </body>
</html>