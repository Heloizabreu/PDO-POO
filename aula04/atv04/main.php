<?php

require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$c1 = new FuncionarioCLT("João", "joao@gmail.com", "19999999999", "Programador", 3000);

$c2 = new FuncionarioPJ("Maria", "maria@gmail.com", "19988888888", "Designer", 4000);

echo $c1->contratar();
echo $c2->contratar();

?>