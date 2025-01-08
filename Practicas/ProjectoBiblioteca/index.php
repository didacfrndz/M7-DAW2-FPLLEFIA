<?php

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
        return "El libro '$this->titulo' escrito por '$this->autor' fue publicado el '$this->anyoPublicacion'";
    }
}


class Biblioteca{

    public array $arrayLibros;

    public function __construct(array $arrayLibros = [])
    {
        $this->arrayLibros = $arrayLibros;
    }

    public function agregarLibro(){
        array_push($this->arrayLibros);
    }

    public function mostrarLibro(){

    }

    public function buscarLibro(){

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>