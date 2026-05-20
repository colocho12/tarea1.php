<?php
$palabra = $_POST["palabra"];
$cantidad= strlen($palabra);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <h1>La palabra "<?php echo $palabra; ?>" tiene <?php echo $cantidad; ?> caracteres.</h1>
</html>