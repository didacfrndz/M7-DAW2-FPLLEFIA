<?php
    class Libro{

        public string $titulo ="Titulo";
        public string $autor = "Autor";

        public function __construct($titulo = null, $autor = null)
        {
            if($titulo != null){
                $this->titulo = $titulo;
            }
            if($autor != null){
                $this->autor = $autor;
            }
        }

        public function descripcion(){
            return "El libro '$this->titulo' ha estado escrito por '$this->autor'";
        }

    }
    
    $libro1 = new Libro(); 
    $libro2 = new Libro("Cien años de soledad", "Gabriel Garcia Marquez");
    
    echo $libro1->descripcion();
    echo "<br>";
    echo $libro2->descripcion();
?>