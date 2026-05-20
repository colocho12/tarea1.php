<?php
$num = $_POST["numero"];
$suma = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sumatoria</title>
    </head>
    <body>
        <h1>Sumatoria del numero</h1>
        <?php
        for ($i = 1; $i <= $num; $i++) {
            $suma =$suma + $i;
        }
        echo "La sumatoria es: " . $suma;
        ?>
    </body>
</html>
