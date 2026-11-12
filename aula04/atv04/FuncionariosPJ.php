
<?php

require_once 'FuncionarioInterface.php';

class FuncionarioPJ implements FuncionarioInterface {

    public function contratar(){
        return "Funcionario PJ contratado!";
    }

    public function demitir(){
        return "Funcionario PJ demitido!";
    }

}

?>
