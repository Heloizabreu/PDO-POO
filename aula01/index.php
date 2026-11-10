<?php
require_once 'Cliente.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
$c1 = new Cliente($_POST['nome'], $_POST['idade'], $_POST['peso'], $_POST
['altura']);
}


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastre-se</h1>
<form action="" method="post">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id=""><br>
    <label for="idade">Idade: </label>
    <input type="number" name="idade" id=""><br>
    <label for="peso">Peso: </label>
    <input type="number" name="peso" id="" steps=0.01><br>
    <label for="altura">Altura: </label>
    <input type="number" name="altura" id="" steps=0.01>
    <input type="submit" value="Cadastrar">
</form>
if(isset($c1)){
    $c1->mostrarDados();
}
</body>
</html>


?>