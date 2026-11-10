<?php
//Cria a classe Cliente.
class Cliente{
    //Atributos
    private string $nome;
    private string $email;
    private string $cpf;

    //Método Construtor
    public function __construct(string $nome, string $email, string $cpf){
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
    }

    //Métodos
    public function getNome(){
        return $this->nome;
    }

    public function mostrarDados(){
        echo "Nome: " . $this->nome . "\n";
        echo "E-mail: " . $this->email . "\n";
        echo "CPF: " . $this->cpf . "\n";
    }
}

// --- Teste do Código ---
$c = new Cliente('Jorge', 'jorge@email.com', '123.456.789-00');
$c->mostrarDados();
echo "\nNome obtido com getNome(): " . $c->getNome() . "\n";
?>
