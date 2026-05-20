<?php
$TotalPaga= $_POST["compra"];
$Descuento= $TotalPaga * 0.10;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Total paga</title>
    </head>
    <body>
        <h1>Total a pagar</h1>
        <?php
        if($TotalPaga > 100){
        echo "El total a pagar es: $Descuento$" . " ya que se aplico un descuento del 10% por haber superado los $100.";
        }else{
            echo "El total a pagar es: $TotalPaga$" . " ya que no se aplico el descuento del 10% por no haber superado los $100.";
        }
        ?>
    </body>
</html>