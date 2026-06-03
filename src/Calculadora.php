<?php
namespace App;

class Calculadora {
    public function sumar($a, $b) {
        return $a + $b;
    }

    public function restar($a, $b) {
        return $a - $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("No se puede dividir por cero.");
        }
        return $a / $b;
    }
      public function potencia($base, $exponente) {
        return pow($base, $exponente);
    }
 
    public function raizCuadrada($a) {
        if ($a < 0) {
            throw new \InvalidArgumentException("No se puede calcular la raiz cuadrada de un numero negativo.");
        }
        return sqrt($a);
    }
 
    public function valorAbsoluto($a) {
        return abs($a);
    }
}