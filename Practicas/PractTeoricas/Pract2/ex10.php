<?php
class Producte {
    public string $nom;
    public float $preu;

    public function __construct(string $nom, float $preu) {
        $this->nom = $nom;
        $this->preu = $preu;
    }
}
$productes = [
    new Producte("Portatil", 899.99),
    new Producte("Telèfon mòbil", 499.99),
    new Producte("Auriculars", 89.99),
    new Producte("Tablet", 329.50),
    new Producte("Ratolí", 15.99),
];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista de Productes</title>
</head>
<body>
<h2>Llista de Productes</h2>
<table>
    <thead>
        <tr>
            <th>Nom del Producte</th>
            <th>Preu (€)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($productes as $producte) {
            echo "<tr>";
            echo "<td>" . $producte->nom . "</td>";
            echo "<td>" . number_format($producte->preu, 2, ',', '.') . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</body>
</html>
