
<?php

require_once 'FuncionarioInterface.php';

class FuncionarioCLT implements FuncionarioInterface {

    public function contratar(){
        return "Funcionario CLT contratado!";
    }

    public function demitir(){
        return "Funcionario CLT demitido!";
    }

}

?>
