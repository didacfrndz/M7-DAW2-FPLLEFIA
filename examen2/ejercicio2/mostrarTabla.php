<?php
include "array.php";
include_once "funciones.php";
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
<table class="table table-dark table-striped-columns">
        <tr>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Descripcion</td>
        </tr>
        <?php
            generarTablaProductos($productos);
        ?>
        </table>

        <P>AQUI DEBO AÑADIR UN FORMULARIO PARA AÑADIR UN PRODUCTO</P>
        
        
    <form action="mostrarTabla.php" method="POST">
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre" id="nombre">
        <label for="precio">PRECIO</label>
        <input type="text" name="precio" id="precio">
        <label for="descripcion">DESCRIPCION</label>
        <input type="text" name="descripcion" id="descripcion">
        <button type="POST">AÑADIR</button>
    </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>