<?php
    class Persona{
        public string $nombre;
        public int $edad;

        public function __construct(string $nombre, int $edad)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function saludar(): string{
            return "Hola, soy $this->nombre y tengo $this->edad años";
        }

    }
    $persona1 = new Persona("Anna", 25);
    echo $persona1->saludar();
?>