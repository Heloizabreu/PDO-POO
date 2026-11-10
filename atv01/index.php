<?php
require_once 'Produto.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $produto1 = new Produto($_POST['nome'], $_POST['preco']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Cadastre um produto</h1>

    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01"><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php
    if (isset($produto1)) {
        $produto1->mostrarProduto();
    }
    ?>
</body>
</html>