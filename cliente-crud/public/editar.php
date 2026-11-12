<?php
require_once __DIR__ . '/../repositories/ClienteRepository.php';
$repo = new ClienteRepository();
if($_POST){
    $cliente = new Cliente(
        $_POST['nome'],
        $_POST['email'],
        $_POST['documento']
    );
    $repo->atualizar($_POST['id'],$cliente);
    header("Location: index.php");
}
$cliente = $repo->buscarPorId($_GET['id']);
?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?=  $cliente['id'] ?>">
    <input type="text" name="nome" value="<?= $cliente['nome'] ?>"><br>
    <input type="email" name="email" id="email" value="<?= $cliente['email'] ?>"><br>
    <input type="text" name="documento" id="documento" value="<?= $cliente['documento'] ?>">
    <button>Atualizar</button>
</form>