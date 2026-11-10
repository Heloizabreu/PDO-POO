<?php
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$f[0] = new FuncionarioCLT("Joao", 2500, "123456");
$f[1] = new FuncionarioPJ("Carlos", 4000, "123.123.123/0001-12");
$f[2] = new FuncionarioCLT("Maria", 3000, "654321");
$f[3] = new FuncionarioPJ("Pedro", 5000, "321.321.321/0001-12");

foreach ($f as $funcionario){
    echo $funcionario->getDados();
}
?>