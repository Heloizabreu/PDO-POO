
<?php

require_once 'FuncionarioInterface.php';

//Criando a classe FuncionarioPJ

class FuncionarioPJ implements FuncionarioInterface {

    public function contratar(){
        return "Funcionario PJ contratado!";
    }

    public function demitir(){
        return "Funcionario PJ demitido!";
    }

}

?>
