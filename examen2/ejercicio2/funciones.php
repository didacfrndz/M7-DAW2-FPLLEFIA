<?php
include "array.php";



function generarTablaProductos($productos) {
    foreach ($productos as $producto) {
        echo '
        <tr>
            <td>' . $producto['nombre'] . '</td>
            <td>' . $producto['precio'] . '</td>
            <td>' . $producto['desc'] . '</td>
        </tr>';
    }
}

function agregar_producto() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom = $_POST['nombre'];
        $precio = $_POST['precio'];
        $desc = $_POST['descripcion'];
    
        $producto_nuevo = [
            "nombre" => $nom,
            "precio" => $precio,
            "desc" => $desc
        ];
    
        array_push($productos, $producto_nuevo);
    
    }
    
}
?>
