<?php
$HorasTrabajadas = $_POST['horas'];
$PagoPorHora = $_POST['pago'];
$Sueldo = $HorasTrabajadas * $PagoPorHora;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Salario</title>
</head>
<body>
    <h1>Salario del empleado <?php echo $_POST['nombre']; ?></h1>
    <p>El sueldo del empleado es: $<?php echo $Sueldo; ?></p>
</body>
</html>