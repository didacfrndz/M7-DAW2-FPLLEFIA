<?php
    session_start();
    include "libro.php";
    include "biblioteca.php";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $anyoPublicacion = $_POST['anyoPublicacion'];
        $foto = $_POST['foto'];

        $libro = new Libro($titulo,$autor,$anyoPublicacion,$foto);
        $biblioteca->agregarLibro($libro);
        $_SESSION['biblioteca'] = serialize($biblioteca);
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
    <div class="container">
        <div class="row">
            <!-- Añadir Libros -->
            <div class="col">
                <h2 class="bg-primary">Añadir libros</h2>
                <div class="container-fluid">
                    <form method="POST">
                        <label class="form-label" for="titulo" >Titulo</label>
                        <input class="form-control" require type="text" id="titulo" name="titulo">
                        <label class="form-label" for="autor">Autor</label>
                        <input class="form-control" require type="text" id="autor" name="autor">
                        <label class="form-label" for="anyoPublicacion">Año de Publicacion</label>
                        <input class="form-control" require type="number" id="anyoPublicacion" name="anyoPublicacion">
                        <label class="form-label" for="foto">Portada</label>
                        <input class="form-control" require type="text" id="foto" name="foto">
                        <button class="btn btn-primary">Añadir Libro</button>
                    </form>
                </div>
                
            </div>
            <!-- Mostrar Libros -->
            <div class="col">
                    <h2>Coleccion de Libros</h2>
                    <div class="container-fluid">
                        <!-- Aqui debo mostrar el metodo de mostrarLibros de la clase biblioteca-->
                    </div>
            </div>
            <!-- Buscar Libro -->
            <div class="col">

            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>