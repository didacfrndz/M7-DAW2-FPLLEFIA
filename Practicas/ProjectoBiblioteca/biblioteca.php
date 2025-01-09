<?php

session_start();

class Biblioteca{

    public array $libros = [];

    public function __construct($libros)
    {
        $this->libros[] = $libros;
    }
    public function agregarLibro($libro){
        $this->libros[] = $libro;        
    }

    public function mostrarLibro(){

    }

    public function buscarLibro(){

    }

}