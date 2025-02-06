<?php 
session_start();

class Producto {
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function informacion() {
        return "Nombre: " . $this->nombre . ", Precio: " . $this->precio . "€";
    }
}

class CarritoCompra {
    public $productos = [];

    public function anyadirProducto($producto) {
        $this->productos[] = $producto;
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->precio;
        }
        return $total;
    }

    public function mostrarProductos() {
        foreach ($this->productos as $producto) {
            echo "<tr><td>" . $producto->nombre . "</td><td>" . $producto->precio . "€</td></tr>";
        }
    }
}

if(!isset($_SESSION['carrito']) || !is_a($_SESSION['carrito'], 'CarritoCompra')) {
    $_SESSION['carrito'] = new CarritoCompra();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    $producto = new Producto($nombre, $precio);

    $_SESSION['carrito']->anyadirProducto($producto);
}
include "../../componentes/header.php"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Agregar Productos</h1>
    <form method="post" action="">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control" min="0" required step="0.01">
        </div>

        <button type="submit" class="btn btn-primary">Añadir al carrito</button>
    </form>

    <h2>Productos en el carrito:</h2>
    <table class="table">
       <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
        </tr>
       </thead>
       <tbody>
           <?php
           if (!empty($_SESSION['carrito']->productos)) {
               $_SESSION['carrito']->mostrarProductos();
               echo "<tr><td colspan='2' class='text-end'><strong>Total: </strong>" . $_SESSION['carrito']->calcularTotal() . "€</td></tr>";
           } else {
               echo "<tr><td colspan='2'>No hay productos en el carrito aún.</td></tr>";
           }
           ?>
       </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
