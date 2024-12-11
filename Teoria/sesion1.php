<?php
class Saiyajin{

    //Debes definitir el tipo de atribute si es publico, privado o protejido
    // si no se define el valor de la variable, se considera (null)


    public string $nombre = "Goku";
    public int $nivel_pelea = 1000;

    //primer metodo o funcion
    public function Saludar(){
        return "Hola, mi nombre es". $this->nombre;
    }

}



?>