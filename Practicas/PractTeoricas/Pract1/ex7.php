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
        return "El precio del producto '$this->nombre' es $this->precio €";
    }
}

$producto1 = new Producto("portatil", 899.99);

echo $producto1->mostrarPrecio();
?>