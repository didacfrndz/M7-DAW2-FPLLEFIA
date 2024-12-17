<?php
    class Libro{

        public string $titulo;
        public string $autor;

        public function __construct($titulo, $autor)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
        }

        public function descripcion(){
            return "El libro '$this->titulo' ha estado escrito por '$this->autor'";
        }

    }
    $libro1 = new Libro("Cien años de soledad", "Gabriel Garcia Marquez");
    echo $libro1->descripcion();
?>