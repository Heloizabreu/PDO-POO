
<?php
class Pessoa {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function __destruct() {
        echo "Objeto " . $this->nome . " foi destruído";
    }
}

$pessoa = new Pessoa("Maria");

unset($pessoa);
