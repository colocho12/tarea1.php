<?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    ?>
    <html>
        <head>
            <title>Datos</title>
        </head>
        <body>
            <strong>Nombre:</strong> <?php echo $nombre; ?>
            <br>
            <strong>Edad:</strong> <?php echo $edad; ?>
            <br>
        </body>
    </html>