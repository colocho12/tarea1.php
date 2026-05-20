<?php
$edad = $_POST["edad"];
$futura = $edad + 10;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edad</title>
    </head>
    <body>
        <h1>Edad</h1>
        <?php echo "En 10 años tendrás " . $futura . " años"; ?>
    </body>
</html>