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
            throw new \InvalidArgumentException(
                "No se puede calcular la raiz cuadrada de un numero negativo."
            );
        }
        return sqrt($a);
    }

    public function valorAbsoluto($a) {
        return abs($a);
    }

    public function modulo($a, $b) {
        return $a % $b;
    }

    public function porcentaje($total, $porcentaje) {
        return ($total * $porcentaje) / 100;
    }

    public function maximo($a, $b) {
        return max($a, $b);
    }

    public function minimo($a, $b) {
        return min($a, $b);
    }

    public function factorial($n) {
        if ($n < 0) {
            throw new \InvalidArgumentException(
                "El factorial no existe para numeros negativos."
            );
        }

        $resultado = 1;

        for ($i = 2; $i <= $n; $i++) {
            $resultado *= $i;
        }

        return $resultado;
    }
}