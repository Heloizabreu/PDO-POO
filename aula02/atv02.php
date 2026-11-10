
<?php

class FoneDeOuvido{

    private string $marca;
    private int $volume;
    private int $bateria;
    private bool $ligado;

    public function __construct(string $marca, int $volume, int $bateria, bool $ligado){
        $this->marca = $marca;
        $this->volume = $volume;
        $this->bateria = $bateria;
        $this->ligado = $ligado;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getVolume(){
        return $this->volume;
    }

    public function setVolume(int $volume){
        if($volume >= 0 && $volume <= 100){
            $this->volume = $volume;
        }else{
            echo "Volume inválido!\n";
        }
    }

    public function ligar(){
        if($this->bateria > 0){
            $this->ligado = true;
            echo "Fone ligado!\n";
        }else{
            echo "Bateria descarregada!\n";
        }
    }

    public function desligar(){
        $this->ligado = false;
        echo "Fone desligado!\n";
    }

    public function tocarMusica(){
        if($this->ligado == true && $this->bateria > 0){
            echo "Tocando música!\n";
            $this->bateria -= 10;
        }else{
            echo "Não é possível tocar música!\n";
        }
    }

    public function mostrarDados(){
        echo "Marca: " . $this->marca . "\n";
        echo "Volume: " . $this->volume . "\n";
        echo "Bateria: " . $this->bateria . "%\n";
    }
}

$f = new FoneDeOuvido('JBL', 50, 100, false);

$f->mostrarDados();
$f->setVolume(70);
echo $f->getVolume() . "\n";
$f->setVolume(150);
$f->ligar();
$f->tocarMusica();
$f->desligar();


class Produto{

    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPreco(){
        return $this->preco;
    }
}

$p1 = new Produto('Caderno', 25.50);
$p2 = new Produto('Caneta', 3.50);

echo $p1->getNome() . " - " . $p1->getPreco() . "\n";
echo $p2->getNome() . " - " . $p2->getPreco() . "\n";


/*

1. public pode ser acessado de fora da classe, private somente dentro dela.

2. O PHP apresenta um erro ao tentar acessar um atributo private fora da classe.

3. O construtor inicializa os atributos do objeto.

4. A validação do CPF deve ficar no setter, para verificar se o valor é válido antes de alterá-lo.

*/

?>
