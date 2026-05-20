<?php
$num= $_POST["numero"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tabla de multiplicar</title>
    </head>
    <body>
        <h1>Tabla de multiplicar del numero <?php echo $num; ?></h1>
        <ol>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>$num x $i = " . ($num * $i) . "</li>";
            }
            ?>
        </ol>
</html>