<?php

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function mostrarProduto() {
        echo "Produto: " . $this->nome . "<br>";
        echo "Preço: R$ " . $this->preco . "<br>";
    }
}

?>