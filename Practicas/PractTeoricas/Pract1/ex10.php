<?php

class Animal {
    public $nombre;
    public $tipo;

    
    public function __construct($nombre, $tipo) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    
    public function describir() {
        return "Aquest és un " . $this->tipo . " anomenat " . $this->nombre . ".";
    }
}
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Animal</title>
</head>
<body>

<h2>Introduce el Animal</h2>

<form method="post">
    <label for="nombre">Nombre del animal:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>
    <label for="tipo">Tipo de animal:</label>
    <input type="text" id="tipo" name="tipo" required><br><br>
    <input type="submit" value="descripcion">
</form>

<?php
// Comprovar si s'ha enviat el formulari
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recollir els valors del formulari
    $nom = $_POST['nombre'];
    $tipus = $_POST['tipo'];
    $animal = new Animal($nombre, $tipo);
    echo "<h3>Descripcion del Animal:</h3>";
    echo "<p>" . $animal->describir() . "</p>";
}
?>

</body>
</html>