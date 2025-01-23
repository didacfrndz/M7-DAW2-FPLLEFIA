<?php
    class Baraja{

        public array $baraja_cartas = [];

        public function crear_baraja(){
            $colores = ['red', 'yellow', 'blue', 'green'];

            foreach ($colores as $color){
                for( $i=1 ; $i<=9 ; $i++){
                    $this->baraja_cartas[] = new Carta($color, $i, count($this->baraja_cartas) + 1);
                }

            $this->baraja_cartas[] = new Carta($color, 'reverse', uniqid());
            $this->baraja_cartas[] = new Carta($color, 'skip', uniqid());
            $this->baraja_cartas[] = new Carta($color, 'picker', uniqid());

            }

        }

        public function mezcla(){
            shuffle($this->baraja_cartas);
        }

        public function pinta_baraja(){
            $baraja= "";
            foreach($this->baraja_cartas as $carta){
                $baraja .=$carta->pinta_carta();
            }
            return $baraja;
        }

        public function pinta_baraja_girada(){
            $baraja= "";
            foreach($this->baraja_cartas as $carta){
                $baraja .=$carta->pinta_carta_girada();
            }
            return $baraja;
        }


        public function getConjuntoCartas() {
            return $this->baraja_cartas;
        }

    }

    $baraja = new Baraja();

    $baraja->crear_baraja();

    $baraja->mezcla();

    echo $baraja->pinta_baraja();

    echo $baraja->pinta_baraja_girada();
?>