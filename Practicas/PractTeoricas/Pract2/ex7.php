<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari Persona</title>
</head>
<body>

<h2>Introduïu les dades de la persona</h2>

<form method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="edat">Edat:</label>
    <input type="number" id="edat" name="edat" required><br><br>

    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST['nom'];
    $edat = $_POST['edat'];

    class Persona {

        public string $nom;
        public int $edat;

        public function __construct(string $nom, int $edat) {
            $this->nom = $nom;
            $this->edat = $edat;
        }

        public function mostrarDades() {
            return "El nom de la persona és " . $this->nom . " i té " . $this->edat . " anys.";
        }
    }

    $persona = new Persona($nom, $edat);

    echo "<h3>Dades de la persona:</h3>";
    echo "<p>" . $persona->mostrarDades() . "</p>";
}
?>

</body>
</html>