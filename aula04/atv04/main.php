
<?php

require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$clt = new FuncionarioCLT();
$pj = new FuncionarioPJ();

echo $clt->contratar();
echo "<br>";
echo $clt->demitir();

echo "<br>";

echo $pj->contratar();
echo "<br>";
echo $pj->demitir();

?>
