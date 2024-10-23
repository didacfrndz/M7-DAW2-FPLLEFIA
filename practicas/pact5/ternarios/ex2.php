<?php
$stock = 5;
$mensaje = $stock > 0 ? "Producto disponible" : "Producto agotado";
$color = $stock > 0 ? "green" : "red";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado del Producto</title>
</head>
<body>
    <p style="color: <?php echo $color; ?>;"><?php echo $mensaje; ?></p>
</body>
</html>