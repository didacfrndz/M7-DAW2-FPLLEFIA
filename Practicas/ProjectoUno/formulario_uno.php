<?php

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
    <form class="bg-light p-4 border rounded shadow" style="width: 300px;">
        <h3 class="text-center mb-4">Formulario de Jugadores</h3>
      
        <div class="mb-3">
            <label for="nombreJugador" class="form-label">Nombre del Jugador</label>
            <input type="text" class="form-control" id="nombreJugador" placeholder="Ingresa el nombre">
        </div>

        <div class="mb-3">
            <label for="numeroJugadores" class="form-label">Número de Jugadores</label>
            <input type="number" class="form-control" id="numeroJugadores" placeholder="Ingresa el número" min="1" max="4">
        </div>
        <button type="submit" class="btn btn-primary w-100">Enviar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>