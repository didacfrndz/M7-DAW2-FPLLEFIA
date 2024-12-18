<?php 
class Producto{

    public string $nombre;
    public float $precio;

    public function __construct(string $nombre, float $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio; 
    }

    public function mostrarPrecio(): string{
        return number_format($this->precio, 2, ',', '.') . " €";
    }
}

$producto = [
    new Producto("Portatil",899.99),
    new Producto("Telefono mobil",499.99),
    new Producto("Auriculares",89.99),
    new Producto("Tablet",329.50),
    new Producto("Raton",15.99),
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($producto as $item): ?>
            <tr>
                <td><?php echo $item->nombre; ?></td>
                <td><?php echo number_format($item->precio, 2, ',', '.'); ?> €</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>