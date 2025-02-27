<?php
session_start();

require_once '../../bbdd/config.php';

//1 verificar que el rol es admin
if($_SESSION['user_rol'] !== 'admin'){
    echo 'No tienes permisos para acceder a esta página';
    exit;
}

//2 comprobar si el formulario ha sido enviado
if(isset($_POST['titulo'])){
    //3 recoger los datos del formulario
    $titulo = $_POST['titulo'] ?? '';
    $url = $_POST['url'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $imagen = $_POST['imagen'] ?? '';
}

//preprara la consulta antes de insertar para evitar SQL injection
$stmt = $mysqli->prepare(
    "INSERT INTO Projects (title, url,description, thumbnail) 
    VALUES (?, ?, ?, ?)"
);
//5 comprobar que la preparacion de la consulta tuvo exito
if(!$stmt){
    echo 'Error en la preparación de la consulta: ' . $mysqli->error;
    exit;
};
//6 bindear los parametros
$stmt->bind_param('ssss', $titulo, $url, $descripcion, $imagen);
//7 ejecutar la consulta
if($stmt->execute()){
    echo 'Proyecto añadido con éxito';
}else{
    echo 'Error al añadir el proyecto: ' . $stmt->error;
}
//8 cerrar la declaración
$stmt->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Admin</title>
</head>
<body>
    <h1>Formulario add new</h1>
    <form action="" method="POST">
        <label for="name">Titulo:</label><br>
        <input type="text" name="name" id="name" required><br>

        <label for="description">URL:</label><br>
        <textarea name="description" id="description" cols="30" rows="10" required></textarea><br>

        <label for="date_start">Descripcion:</label><br>
        <input type="date" name="date_start" id="date_start" required><br>

        <label for="date_end">Imagen: </label><br>
        <input type="date" name="date_end" id="date_end" required><br>

        <input type="submit" value="Añadir proyecto">
</body>
</html>