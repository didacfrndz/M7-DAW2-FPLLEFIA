<?php 
session_start();
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta de Datos</title>
</head>
<body>
    <header>
        <h1>Tarjeta de Datos</h1>
        <nav>
            <?php if (isset($_SESSION['user_id'])): ?>
                <img src="<?= $_SESSION['user_avatar'] ?>" alt="Avatar">
                <p><?= $_SESSION['user_name'] ?></p>
                <a href="logout.php">Cerrar Sesión</a>
                <?php if ($_SESSION['user_rol'] === 'admin') : ?>
                    <a href="#">
                        <img src="admin.jpeg" alt="Admin" width="10">
                    </a>
                <?php endif; ?>
            <?php endif; ?>
        </nav>
    </header>
</body>
</html>