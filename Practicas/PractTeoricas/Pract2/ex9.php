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

    public function saludar(): string {
        return "Hola, sóc un/a " . $this->tipus . " i em dic " . $this->nom . ".";
    }
}
$animal = new Animal("Bambo", "goss");

echo $animal->saludar();
?>