<?php
$Nombre = $_POST['nombre'];
$Correo = $_POST['correo'];
$Ciudad = $_POST['ciudad'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Datos personales</title>
</head>
<body>
    <h1>Datos personales</h1>
    <p><strong>Nombre:</strong> <?php echo $Nombre; ?></p> <br>
    <p><strong>Correo electronico:</strong> <?php echo $Correo; ?></p><br>
    <p><strong>Ciudad actual:</strong> <?php echo $Ciudad; ?></p><br>
</body>
</html>