
<?php
class Funcionario {
    public $nome;
    public $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual) {
        $this->salario += $this->salario * ($percentual / 100);
    }
}

$funcionario = new Funcionario("Carlos", 2000);

echo "Salário antes: R$ " . $funcionario->salario . "<br>";

$funcionario->aumentarSalario(10);

echo "Salário depois: R$ " . $funcionario->salario;
