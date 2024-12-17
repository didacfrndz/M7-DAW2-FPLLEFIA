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

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $nombre = $_POST['nombre'];
    $autor = $_POST['edad'];

    $persona = new Persona($nombre,$edad);

    echo $persona->saludar();
}else{
    echo'<form method="POST" action="">
            Nom: <input type="text" name="nom" required><br>
            Edat: <input type="number" name="edat" required><br>
            <input type="submit" value="Enviar">
          </form>';
}


?>