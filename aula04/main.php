<?php
//importando a classe controle
require_once 'Controle.php';
$c = new Controle();
echo $c->getStatus();
echo $c->aumentarVol();
echo $c->diminuirVol();
?>
```