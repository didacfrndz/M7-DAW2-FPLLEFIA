<?php
session_start();
class Libro{
    public string $titulo;
    public string $autor;
    public int $anyoPublicacion;
    public string $foto;

    public function __construct($titulo, $autor, $anyoPublicacion, $foto){

        $this->titulo = $titulo; 
        $this->autor = $autor;
        $this->anyoPublicacion = $anyoPublicacion;
        $this->foto = $foto;
    }

    public function detalles(){
        /*Poner aqui la tarjeta*/
        return "El libro '$this->titulo' escrito por '$this->autor' fue publicado el '$this->anyoPublicacion'";
    }
}