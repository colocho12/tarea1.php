<?php
$numero = $_POST["num1"];
?>
<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <h1>Resultado del impar o par</h1>
        <label>Resultado:</label><br>
        <?php
        if ($numero %2 == 0) {
        echo "$numero es un numero par";
        } else {
        echo "$numero es un numero impar";
        }
        ?>
    </body>
</html>
    </body>