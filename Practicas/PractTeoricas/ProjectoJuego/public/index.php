<?php
include '../src/config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
            body {
            background-image: url('https://www.ngenespanol.com/wp-content/uploads/2024/10/estas-son-las-nebulosas-mas-impresionantes-y-espeluznantes-del-universo.jpg'); /* URL de la imagen */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        label {
            color: #0047AB; /* Azul Cobalto */
        }
        .form-container {
            margin-top: 10%;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <h2 class="text-center mb-4">Crea tu personaje</h2>
                <form method="post" action="../src/classes/Molde.php">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apodo">Apodo</label>
                        <input type="text" id="apodo" name="apodo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="salud">Puntos de Salud</label>
                        <input type="number" id="salud" name="salud" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ataque">Ataque</label>
                        <input type="number" id="ataque" name="ataque" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="defensa">Defensa</label>
                        <input type="number" id="defensa" name="defensa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="text" id="imagen" name="imagen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="habilidades">Habilidades (separa con comas)</label>
                        <input type="text" id="habilidades" name="habilidades" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Creado" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>