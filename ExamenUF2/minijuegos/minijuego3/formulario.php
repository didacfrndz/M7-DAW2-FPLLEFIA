<?php
session_start();

class Usuario{
    public string $nombre;
    public int $edad;
    public string $correo;

    public function __construct($nombre, $edad, $correo)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->correo = $correo;
    }

    public function validarDatos(){
        if (!is_int($this->edad) || $this->edad <= 0) {
            return "L'edat no és vàlida. Ha de ser un número positiu.";
        }

        return "Les dades són vàlides.";
    }
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = (int)$_POST['edad'];
    $correo = $_POST['correo'];

    $usuario = new Usuario($nombre, $edad, $correo);
    $resultat = $usuario->validarDatos();

    if ($resultat !== "Les dades són vàlides.") {
        $error = $resultat;
    } else {
        $_SESSION['usuario'] = [
            'nombre' => $usuario->nombre,
            'edad' => $usuario->edad,
            'correo' => $usuario->correo
        ];
    }
}
include "../../componentes/header.php"
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (isset($_SESSION['usuario'])): ?>
        <p>Usuari guardat: <?php echo $_SESSION['usuario']['nombre']; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label for="nombre">Nom:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="edad">Edat:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="correo">Correu Electrònic:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
