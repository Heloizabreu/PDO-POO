
<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function idade() {
        return date('Y') - $this->ano;
    }
}

$carro = new Carro("Toyota", "Corolla", 2020);

echo "Marca: " . $carro->marca . "<br>";
echo "Modelo: " . $carro->modelo . "<br>";
echo "Idade: " . $carro->idade() . " anos";
