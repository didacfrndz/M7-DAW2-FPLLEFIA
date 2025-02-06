<?php
session_start();

include "./baraja.class.php";

class Jugador{
    public $mano = [];
    public int $id;

    public function anyadir_carta($carta){
        $this->mano[] = $carta;
    }

    public function mostrar_mano(){
        for ($i = 0; $i <count($this->mano); $i++){
            echo $this->mano[$i]->pinta_carta_link();
            echo "<br>";
        }
    }

    public function cartasRepartidas(){
        $cartas_a_repartir = $_SESSION['cartasPorJugador'];
        $partida = unserialize($_SESSION['partida']);
        for ($i = 0; $i < $cartas_a_repartir; $i++) {
            $carta = array_shift($partida->baraja->barajaCartas);
            $this->anyadir_carta($carta);
        }
        $_SESSION['partida'] = serialize($partida);
    }
}
?>