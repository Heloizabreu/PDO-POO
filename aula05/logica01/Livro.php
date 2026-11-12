
<?php
class Livro {
    public $titulo;
    public $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function exibirInfo() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br><br>";
    }
}

$livros = [
    new Livro("Dom Casmurro", "Machado de Assis"),
    new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry"),
    new Livro("Harry Potter", "J.K. Rowling")
];

foreach ($livros as $livro) {
    $livro->exibirInfo();
}
