<?php

class Persona {
    public $nom;
    public $edat;

    public function __construct($nom, $edat) {
        $this->nom = $nom;
        $this->edat = $edat;
    }

    public function benvinguda() {
        return "Benvingut/da, " . $this->nom . "! Tens " . $this->edat . " anys.";
    }
}

$persona = new Persona("Joan", 25);

echo $persona->benvinguda();
?>