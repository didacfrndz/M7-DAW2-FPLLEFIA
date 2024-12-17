<?php

    class Calculadora{
        
        public function sumar(float $a, float $b):  float{
            return $a + $b;
        }

        public function restar(float $a, float $b):  float{
            return $a - $b;
        }

        public function multiplicar(float $a, float $b):  float{
            return $a * $b;
        }

        public function dividir(float $a, float $b):  float{
            if($b==0){
                return "Error compai";
            }else{
                return (string)($a/$b);
            }
        }
    }
    $calculadora = new Calculadora();

    echo "Suma: " . $calculadora->sumar(10, 5) . "<br>";
echo "Resta: " . $calculadora->restar(10, 5) . "<br>";
echo "Multiplicació: " . $calculadora->multiplicar(10, 5) . "<br>";
echo "Divisió: " . $calculadora->dividir(10, 5) . "<br>"; 
echo "Divisió per zero: " . $calculadora->dividir(10, 0) . "<br>";

?>