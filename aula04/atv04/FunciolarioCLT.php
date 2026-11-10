
<?php

require_once 'FuncionarioInterface.php';

//Criando a classe FuncionarioCLT

class FuncionarioCLT implements FuncionarioInterface {

    public function contratar(){
        return "Funcionario CLT contratado!";
    }

    public function demitir(){
        return "Funcionario CLT demitido!";
    }

}

?>
