<?php 
class Cliente{
    public $nome;
    public $idade;
    public $peso;
    public $altura;


  public function __construct($nome, $idade, $peso, $altura)
{
    $this->nome = $nome;
    $this->idade = $idade;
    $this->peso = $peso;
    $this->altura = $altura;
    $this->cadastrar =cadastrar();
}
public function registar(){
echo "\n Cliente: {$this->nome} registado com sucesso!";
}

public function mostrarDados(){
    echo "\nNome: " . $this->nome . "\n";
    echo "Idade: " . $this->idade . "\n";
    echo "Peso: " . $this->peso . "\n";
    echo "Altura: " . $this->altura . "\n";
}

}

$c1 = new Cliente;
$c1->nome = "Jorge";
$c1->idade = 29;
$c1->peso = 79.9;
$c1->altura = 1.69;
$c1->mostrarDados();

$c2 = new Cliente;
$c2->nome = "Fernanda";
$c2->idade = 34;
$c2->peso = 63;
$c2->altura = 1.68;
$c2->mostrarDados();
?>