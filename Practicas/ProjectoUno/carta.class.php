<?php

class Carta{

    public $numero;
    public $color;
    public $index;

    public function __construct($numero, $color,$index = null) {
        $this->numero = $numero;
        $this->color = $color;
        $this->index = $index;
    }

    public function pintar_carta() {
        $ruta = $this->numero . '_' . strtolower($this->color) . '.png';
        return '<img src="cartas_uno/' . $ruta . '" alt="Carta">';
    }

    public function pintar_carta_link() {
        $ruta = $this->numero . '_' . strtolower($this->color) . '.png';
        return '<a href="?carta=' . $this->index . '"><img src="cartas_uno/cartas_uno/' . $ruta . '" alt="Carta"></a>';
    }

    public function pinta_carta_girada() {
        return '<img src="cartas_uno/cartas_uno/carta_girada.png" alt="Carta girada">';
    }
    
    
}

?>

