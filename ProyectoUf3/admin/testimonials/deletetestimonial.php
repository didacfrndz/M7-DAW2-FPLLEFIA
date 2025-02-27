<?php
session_start();
require_once '../../bbdd/config.php';
//vericar acceso
if ($_SESSION['user_rol'] == 'admin') {
    echo 'Bienvenido ' . $_SESSION['user_name'] . ' ' . $_SESSION['user_surname'] . '!';
} else {
    echo 'No tienes permisos para acceder a esta página.';
    exit;
};
//aqui iran las tablas d ela base de datos para que el admin pueda gestionarlas

//extraccion de testimonios
$resultTestimonios = mysqli_query($mysqli, "SELECT * FROM TESTIMONIALS");
$testimonios = $resultTestimonios->fetch_all(MYSQLI_ASSOC);

//2 mostramos los testimonios

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Panel de admin</h1>
    <h2>Testimonios</h2>
    <!-- aqui va la tabla dinamica de testimonios-->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Testimonio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testimonios as $testimonio) : ?>
                <tr>
                    <td><?= $testimonio['name'] ?></td>
                    <td><?= $testimonio['surname'] ?></td>
                    <td><?= $testimonio['description'] ?></td>
                    <td><?= $testimonio['rating'] ?></td>
                    <td>
                        <a href="edittestimonio.php?id=<?=$item['id']?>">Editar</a>
                        <a href="deletetestimonial.php?id=<?= $testimonial['id'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    <h2>Noticias</h2>
    <h2>Projectos</h2>

</body>
</html>