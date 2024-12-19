<?php
include '../src/config/config.php';
include_once'../../public/index.php';

class Personaje{

    public int $id;
    public string $nombre;
    public string $apodo;

    public int $vida;
    public int $ataque;
    public int $defensa;
    
    public string $imagen;
    public array $habilidades;


    public function __construct(int $id,string $nombre,string $apodo,int $vida,int $ataque,int $defensa,string $imagen,array $habilidades = [])
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apodo = $apodo;

        $this->vida = $vida;
        $this->ataque = $ataque;
        $this->defensa = $defensa;

        $this->imagen = $imagen;
        $this->habilidades = $habilidades;
    }

    public function obtenerHabilidades(){
        implode(",", $this->habilidades);
    }
}
if ($_SERVER['REQUEST_METHOD']== 'post'){
    $nombre = $_POST['nombre'];
    $apodo = $_POST['apodo'];
    $salud = $_POST['salud'];
    $ataque = $_POST['ataque'];
    $defensa = $_POST['defensa'];
    $imagen = $_POST['imagen'];
    $habilidades = $_POST['habilidades'];

    $personaje = new Personaje($nombre, $apodo, $salud, $ataque, $defensa, $imagen, $habilidades);
    
}

?>