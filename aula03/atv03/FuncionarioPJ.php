<?php
//importando a classe mae
require_once 'Funcionario.php';

//criando a classe funcionario PJ
class FuncionarioPJ extends Funcionario{
    //atributos
    private string $cnpj;

    //metodos
    // [Override]
    public function __construct(string $nome, float $salario, string $cnpj)
    {
        parent::__construct($nome, $salario);
        $this->cnpj = $cnpj;
    }

    public function calcularPagamento(): float
    {
        return $this->salario;
    }

    public function getDados(): string
    {
        return "
        Nome: {$this->nome}
        Salario: {$this->salario}
        CNPJ: {$this->cnpj}
        Pagamento: {$this->calcularPagamento()}
        ";
    }
}
?>