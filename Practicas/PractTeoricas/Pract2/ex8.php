<?php

class Animal {

    public string $nom;
    public string $tipus;

    public function __construct(string $nom, string $tipus) {
        $this->nom = $nom;
        $this->tipus = $tipus;
    }

    public function descriure(): string {
        return "L'animal es diu " . $this->nom . " i és un/a " . $this->tipus . ".";
    }
}

$animal = new Animal("Toby", "goss");

echo $animal->descriure();
?>
