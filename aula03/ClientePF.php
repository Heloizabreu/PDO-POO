<?php 
//importando a classe mae
require_once 'Cliente.php';
//criando a classe pessoa fisica
class ClientePF extends Cliente{
    //atributos
    private string $cpf;

    //metodos
    # [Override]
    public function __construct(string $nome, string $email, string $telefone)
    {
        parent::__construct($nome,$email,$telefone);
        $this->cpf = $cpf;
    }
    public function getDados(): string
    {
        parent::getDados();
        return "
        Nome: {$this->nome}
        E-mail: {$this->email}
        Telefone: {$this->telefone}
        CPF: {$this->cpf}
        ";
    }
}
$pf = new ClientePF("Jorge", "j@j.com.br", "1999999999", "123.123.123-00");
$pf->getDados();
?>
