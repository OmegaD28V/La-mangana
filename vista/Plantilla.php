<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La mangana</title>
</head>
<body>
    <?php
        include "vista/modulo/Navegacion.php";
        $contrl = new Controlador();
        $contrl -> traerPaginaCtl();
    ?>
</body>
</html>