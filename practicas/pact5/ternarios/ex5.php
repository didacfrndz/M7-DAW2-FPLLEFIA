<?php
$logueado = true;
$icono = $logueado ? "https://upload.wikimedia.org/wikipedia/commons/f/f9/LaMelo_Ball_%28cropped%29.jpg" : "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Nikola_Jokic_free_throw_%28cropped%29.jpg/800px-Nikola_Jokic_free_throw_%28cropped%29.jpg";
$textoAlternativo = $logueado ? "Usuario logueado" : "Usuario invitado";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de Usuario</title>
</head>
<body>
    <h2><?php echo $textoAlternativo; ?></h2>
    <img src="<?php echo $icono; ?>" alt="<?php echo $textoAlternativo; ?>" width="50" height="50">
</body>
</html>