 
<?php
class Usuario {
    private $nome;
    private $email;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}

$usuario = new Usuario("Heloiza", "heloiza@email.com");

echo "Nome: " . $usuario->getNome() . "<br>";
echo "Email: " . $usuario->getEmail();
