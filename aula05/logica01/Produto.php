
<?php
class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function calcularTotal() {
        return $this->preco * $this->quantidade;
    }
}

$p1 = new Produto("Notebook", 3500, 2);
$p2 = new Produto("Mouse", 50, 3);
$p3 = new Produto("Teclado", 120, 2);

echo $p1->nome . ": R$ " . $p1->calcularTotal() . "<br>";
echo $p2->nome . ": R$ " . $p2->calcularTotal() . "<br>";
echo $p3->nome . ": R$ " . $p3->calcularTotal();
