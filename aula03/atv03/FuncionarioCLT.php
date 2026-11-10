<?php
//importando a classe mae
require_once 'Funcionario.php';

//criando a classe funcionario CLT
class FuncionarioCLT extends Funcionario{
    //atributos
    private string $carteira;

    //metodos
    // [Override]
    public function __construct(string $nome, float $salario, string $carteira)
    {
        parent::__construct($nome, $salario);
        $this->carteira = $carteira;
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
        Carteira: {$this->carteira}
        Pagamento: {$this->calcularPagamento()}
        ";
    }
}
?>