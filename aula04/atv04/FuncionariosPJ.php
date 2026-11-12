<?php

require_once 'FuncionarioInterface.php';

class FuncionarioPJ implements FuncionarioInterface{

    private string $nome;
    private string $email;
    private string $cargo;
    private float $salario;
    private bool $status;

    public function __construct($nome, $email, $telefone, $cargo, $salario){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->status = false;
    }

    public function contratar(){
        $this->status = true;
        return "Funcionário PJ contratado!";
    }

    public function demitir(){
        $this->status = false;
        return "Funcionário PJ demitido!";
    }
}

?>