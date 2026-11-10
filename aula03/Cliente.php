<?php 
//criando a classe cliente
class Cliente{
    //atributos
    protected string $nome;
    protected string $email;
    protected string $telefone;

    //metodos
    public function __construct(string $nome, string $email, string $telefone){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;}
    protected function getDados(){}
}
$c = new Cliente("Jorge","j@j.com.br","1234567");
?>