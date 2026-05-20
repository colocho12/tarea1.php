<?php
$Nombre=$_POST["nombre"];
$Producto=$_POST["producto"];
$Cantidad=$_POST["cantidad"];
$Precio=$_POST["precio"];
$Subtotal=$Cantidad*$Precio;
$total=$Subtotal;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Factura</title>
    </head>
    <body>
        <h1>Factura</h1>
        <p>Nombre del cliente: <?php echo $Nombre; ?></p>
        <p>El subtotal de la compra es: <?php echo $Subtotal; ?></p>
        <p>El total de la compra es: <?php echo $total; ?></p>
    </body>
</html>  