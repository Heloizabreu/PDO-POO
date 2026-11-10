<?php
//criando a classe funcionario
class Funcionario{
    //atributos
    protected string $nome;
    protected float $salario;

    //metodos
    public function __construct(string $nome, float $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    protected function getDados(){}
}
?>