<?php
$dolar = $_POST["dolar"];
$conversion = round($dolar * 0.92, 2);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <h1>los <?php echo $dolar; ?> dolares equivalen a <?php echo $conversion; ?> euros.</h1>
    </body>
</html>