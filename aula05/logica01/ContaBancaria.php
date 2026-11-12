
<?php
class ContaBancaria {
    public $titular;
    private $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque realizado!<br>";
        } else {
            echo "Saldo insuficiente!<br>";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria("Heloiza", 1000);

$conta->depositar(500);
$conta->sacar(200);

echo "Titular: " . $conta->titular . "<br>";
echo "Saldo: R$ " . $conta->getSaldo();


