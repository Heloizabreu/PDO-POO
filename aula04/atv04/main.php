<?php

require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$c1 = new FuncionarioCLT("João", "joao@gmail.com", "Programador", 3000);

$c2 = new FuncionarioPJ("Maria", "maria@gmail.com", "Designer", 4000);

echo $c1->contratar();
echo $c2->contratar();

?>