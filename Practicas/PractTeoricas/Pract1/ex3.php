<?php
    class Libro{

        public string $titulo;
        public string $autor;

        public function __construct($titulo = "Titulo", $autor = "Autor")
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
        }

        public function descripcion(){
            return "El libro '$this->titulo' ha estado escrito por '$this->autor'";
        }

    }
    
    $libro1 = new Libro("Cien años de soledad", "Gabriel Garcia Marquez");
    $libro2 = new Libro();

    echo $libro1->descripcion();
    echo $libro2->descripcion();
?>