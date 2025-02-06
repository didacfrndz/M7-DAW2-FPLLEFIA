<?php
session_start();
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
<div class="container mt-5">
        <h1 class="text-center text-white mb-4">Formulario de Jugadores</h1>
        <form method="POST" action="#">
            <div class="mb-3">
                <label for="numJugadores" class="form-label text-white">Número de Jugadores</label>
                <input type="number" class="form-control" id="numeroJugadores" name="numeroJugadores" placeholder="Introduce el número de jugadores" min="1" required>
            </div>

            <div class="mb-3">
                <label for="numCartas" class="form-label text-white">Número de Cartas por Jugador</label>
                <input type="number" class="form-control" id="cartasPorJugador" name="cartasPorJugador" placeholder="Introduce el número de cartas por jugador" min="1" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>