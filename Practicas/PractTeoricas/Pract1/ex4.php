<?php
    class Libro{

        public string $titulo;
        public string $autor;

        public function __construct($titulo, $autor)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
        }

        public function descripcion(): string{
            return "El libro '$this->titulo' ha estado escrito por '$this->autor'";
        }

        public function getAutor(): string{
            return $this->autor;
        }

    }

    $libro1 = new Libro("Cien años de soledad", "Gabriel Garcia Marquez");
    $libro2 = new Libro();

    echo $libro1->descripcion();
    echo "<br>";
    echo $libro2->descripcion();

    echo "<br>Autor del primer libro: " . $libro1->getAutor();
?>