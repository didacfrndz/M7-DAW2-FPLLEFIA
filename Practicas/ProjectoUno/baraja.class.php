<?php
    class Baraja{

        public array $conjunto_cartas = [];

        public function crear_baraja() { 
            $this->conjunto_cartas = [];
            $colores = ['red', 'yellow', 'blue', 'green'];
            foreach ($colores as $color) {
                for ($i = 0; $i <= 9; $i++) {
                    $this->conjunto_cartas[] = new Carta($i, $color); 
                }

        }
        $this->conjunto_cartas[] = new Carta('reverse', $color);
        $this->conjunto_cartas[] = new Carta('skip', $color);
        $this->conjunto_cartas[] = new Carta('picker', $color);
        }

        public function mezcla(){
            shuffle($this->conjunto_cartas);
        }

        public function pinta_baraja() {
            foreach ($this->conjunto_cartas as $carta) {
                echo $carta->pintar_carta(); 
            }
        }

        public function pinta_baraja_girada() {
            foreach ($this->conjunto_cartas as $carta) {
                echo $carta->pintar_carta(); 
            }
        }


        public function getConjuntoCartas() {
            return $this->conjunto_cartas;
        }

    }

    
?>