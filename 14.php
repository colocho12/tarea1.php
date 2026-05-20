<?php
$metros = $_POST["metros"];
$centimetros = $metros * 100;
?>
<!DOCTYPE html>
<html>
    <header>
        <title>RESULTADO</title>
    </header>
    <body>
        <h1><strong>Resultado de la conversión</strong></h1>
        <p>La cantidad de centímetros es: <?php echo $centimetros; ?></p>
    </body>
</html>