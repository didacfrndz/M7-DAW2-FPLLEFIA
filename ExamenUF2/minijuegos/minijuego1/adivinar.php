<?php
session_start();

class JuegoAdivinar {
    public int $max;
    public int $min;
    public int $numeroSecreto;

    public function __construct(int $max = 20, int $min = 0, int $numeroSecreto= 15) {
        $this->max = $max;
        $this->min = $min;
        $this->numeroSecreto = $numeroSecreto;

        if (!isset($_SESSION['contador'])) {
            $_SESSION['contador'] = 0;
        }
    }

    public function generarNumeroSecreto() {
        $this->numeroSecreto = rand(0,20);
        $_SESSION['contador'] = 0;
    }

    public function procesarAdivinanza(int $valor) {
        $_SESSION['contador']++;

        if ($valor < $this->numeroSecreto) {
            $this->min = $valor;
            return "El número es mayor que " . $valor;
        } elseif ($valor > $this->numeroSecreto) {
            $this->max = $valor;
            return "El número es menor que " . $valor;
        } else {
            $contador = $_SESSION['contador'];
            $_SESSION['contador'] = 0;
            return "¡Lo has adivinado en " . $contador . " intentos!";
        }
    }

    public function getMax() {
        return $this->max;
    }

    public function getMin() {
        return $this->min;
    }

    public function getContador() {
        return $_SESSION['contador'];
    }
}

$game = new JuegoAdivinar();

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['num'])) {
        $valor = (int) $_GET['num'];
        $mensaje = $game->procesarAdivinanza($valor);
    }

    if (isset($_GET['reset'])) {
        $game->generarNumeroSecreto();
        $mensaje = "Nuevo número secreto generado.";
    }
}
include "../../componentes/header.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Adivinar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1>Juego de Adivinar el Número</h1>

    <p><?php echo $mensaje; ?></p>

    <form method="GET">
        <label for="num">Número</label>
        <input type="number" name="num" id="num" min="<?php echo $game->getMin(); ?>" max="<?php echo $game->getMax(); ?>" required>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <form method="GET">
        <input type="submit" name="reset" value="Generar Nuevo Número Secreto">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
