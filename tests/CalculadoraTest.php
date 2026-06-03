<?php
use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase {
    private $calc;

    protected function setUp(): void {
        $this->calc = new Calculadora();
    }

    public function testSuma() {
        $this->assertEquals(5, $this->calc->sumar(2, 3));
    }

    public function testResta() {
        $this->assertEquals(1, $this->calc->restar(4, 3));
    }

    public function testMultiplicacion() {
        $this->assertEquals(12, $this->calc->multiplicar(4, 3));
    }

    public function testDivision() {
        $this->assertEquals(2, $this->calc->dividir(6, 3));
    }

    public function testDivisionPorCeroLanzaExcepcion() {
        $this->expectException(\InvalidArgumentException::class);
        $this->calc->dividir(5, 0);
    }


     public function testPotencia() {
        $this->assertEquals(8, $this->calc->potencia(2, 3));
    }
 
    public function testRaizCuadrada() {
        $this->assertEquals(3, $this->calc->raizCuadrada(9));
    }
 
    public function testRaizCuadradaDeNegativoLanzaExcepcion() {
        $this->expectException(\InvalidArgumentException::class);
        $this->calc->raizCuadrada(-4);
    }
 
    public function testValorAbsoluto() {
        $this->assertEquals(5, $this->calc->valorAbsoluto(-5));
    }

}