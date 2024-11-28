<?php
session_start();


if($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION['nombre']=$_POST['nombre'];
    $_SESSION['apellido']=$_POST['apellido'];
    $_SESSION['foto']=$_POST['foto'];
    header('Location: inicio.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<h1>FORMULARIO INFORMACION</h1>
<form action="index.php" method="POST">
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" required>
<label for="apellido">Apellido</label>
<input type="text" name="apellido" id="apellido" required>
<label for="foto">Foto</label>
<input type="text" name="foto" id="foto" required>
<button type="POST">ENVIAR</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>