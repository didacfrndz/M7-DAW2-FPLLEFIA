<?php

include_once "./carta.class.php";

class Baraja{
    public $barajaCartas=[];

    public function crear_baraja() { 
        foreach (['red', 'yellow', 'blue', 'green'] as $color) {
            for ($i = 0; $i <= 9; $i++) {
                $this->barajaCartas[] = new Carta($i, $color); 
            }
            $this->barajaCartas[] = new Carta('reverse', $color);
            $this->barajaCartas[] = new Carta('skip', $color);
            $this->barajaCartas[] = new Carta('picker', $color);
        }
    }

    public function mezclarBaraja(){
        shuffle($this->barajaCartas);
    }

    public function pintarBaraja(){
        foreach($this->barajaCartas as $carta){
            echo $carta->pintar_carta();
            echo "<br>";
        }
    }
    public function pinta_baraja_girada() {
        foreach ($this->barajaCartas as $carta) {
            echo $carta->pinta_carta_girada();  
        }
    }

    
}

?>