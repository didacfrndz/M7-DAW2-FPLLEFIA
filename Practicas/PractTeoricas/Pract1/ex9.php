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