<?php

class Calculadora {

    public function sumar(float $num1, float $num2): float {
        return $num1 + $num2;
    }
}

$calculadora = new Calculadora();

$resultat = $calculadora->sumar(5.5, 3.2);

echo "El resultat de la suma és: " . $resultat;
?>