<?php
session_start();
class Carta{

    public string $palo;
    public int $numero;
    public string $index;

    public function __construct(string $palo, int $numero, string $index)
    {
        $this->palo = $palo;
        $this->numero = $numero; 
        $this->index = $index;
    }

    public function pinta_carta(){
        $ruta = "cartas_uno/{$this->numero}_{$this->palo}.png";
        return "<img src='{$ruta}' alt='{$this->palo} {$this->numero}' />";
    }

    public function pinta_carta_link(){
        $ruta = "cartas_uno/{$this->numero}_{$this->palo}.png";
        return "<a href=''><img src='{$ruta}' alt='{$this->palo} {$this->numero}'/></a>";
    }

    public function pinta_carta_girada(){
        $imagen = "cartas_uno/carta_girada.png";
        return "<img src='{$imagen}' alt='Carta Girada'/>";
    }
    
    
}

?>

