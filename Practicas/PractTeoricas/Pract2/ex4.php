<?php

class Persona {
    public $nom;
    public $edat;

    public function __construct(string $nom, int $edat) {
        $this->nom = $nom;
        $this->edat = $edat;
    }

    public function benvinguda(): string{
        return "Benvingut/da, " . $this->nom . "! Tens " . $this->edat . " anys.";
    }
}

$persona = new Persona("Joan", 25);
$persona1 = new Persona("Pepito", 8);

echo $persona->benvinguda();
echo $persona1->benvinguda();
?>