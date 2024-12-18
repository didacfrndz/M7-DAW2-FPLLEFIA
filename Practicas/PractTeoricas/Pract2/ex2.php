<?php

class Cotxe {
    public $marca;
    public $model;

    public function __construct($marca = "Suzuki", $model = "Gran Vitara") {
        $this->marca = $marca;
        $this->model = $model;
    }

    public function descripcio() {
        return "El cotxe és un " . $this->marca . " model " . $this->model . ".";
    }
}

$cotxe = new Cotxe("Toyota", "Corolla");
$cotxe1 = new Cotxe();

echo $cotxe->descripcio();
echo $cotxe1->descripcio();
?>
