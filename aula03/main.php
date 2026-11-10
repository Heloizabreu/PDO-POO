<?php
require_once 'ClientePF.php';
require_once 'ClientePJ.php';

$c[0] = new ClientePF("Roberto", "roro@beto.com.br", "197070707070", "321.321.321-32");

$c[1] = new ClientePJ("Carlin", "carlos@morato.com.br", "19717171717171", "321.321.321/0001-12");

$c[2] = new ClientePF("Amado Batista", "amado@batista.com.br", "197272727272", "321.321.321-32");

$c[3] = new ClientePJ("Vorcaro", "dani@vorcaro.com.br", "1973737373", "171.171.171/0007-71");

foreach ($cliente as $cliente){
    echo $cliente->getDados();
}
?>