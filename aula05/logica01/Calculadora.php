
<?php
class Calculadora {
    public static function somar($a, $b) {
        return $a + $b;
    }

    public static function subtrair($a, $b) {
        return $a - $b;
    }

    public static function multiplicar($a, $b) {
        return $a * $b;
    }

    public static function dividir($a, $b) {
        return $a / $b;
    }
}

echo "Soma: " . Calculadora::somar(10, 5) . "<br>";
echo "Subtração: " . Calculadora::subtrair(10, 5) . "<br>";
echo "Multiplicação: " . Calculadora::multiplicar(10, 5) . "<br>";
echo "Divisão: " . Calculadora::dividir(10, 5);
