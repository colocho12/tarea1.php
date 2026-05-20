<?php
$lado1 = $_POST["lado1"];
$perimetro = $lado1 * 4;
?>
<!DOCTYPE html>
<html>
    <header>
        <title>Resultados</title>
    </header>
    <body>
        <h1><strong>Resultado del perimetro</h1></strong>
        <p>El perimetro del cuadrado es: <?php echo $perimetro; ?></p>
    </body>
</html>