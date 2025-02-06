<?php
class Cotxe{
    public $marca;
    public $model;

    function __construct($model, $marca){
        $this->marca = $marca;
        $this->model = $model;
    }

    function descripcio(){
        return "aquest cotche es un " . $this->marca . " " . $this->model;

    }

}
$cotche = new Cotxe("Toyota", "Corolla");
//echo Cotxe->descripcio();
echo $cotxe->descripcio();

//El error estaba en que estas intentando utilizar la clase en vez de la variable para utilizar los metodos de la clase


class Persona{
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
}
$persona = new Persona("Maria","30");
echo $persona->edad;

//estas pasando un parametro que deberia ser INT como String
//edad no es un metodo que exista


class Calculadora{
    //debes poner aqui las variables con el public
    //public $a;
    //public $b;

    //falta aqui un constructor


    //y aqui utilizas las variables del constructor
    function sumar($a,$b){
        return $a + $b;
    }

    function restar($a,$b){
        return $a - $b;
    }
}
$calc = new Calculadora(
    //Aqui se debe mandar que valores quieres
);
$calc->sumar(5,3
//aqui no puedes mandar tu los parametros
);
$calc->restar(10,4
//nuevamente no puedes mandar los parametros
);

//Falta añadir algun sitio donde atrbuir las variable que queremos mandar, pero es que tampoco estamos mandando variables, ademas de que cuando utilizas una funcion en un objeto no puedes mandar parametros ya que los recoge cuando los envias
?>