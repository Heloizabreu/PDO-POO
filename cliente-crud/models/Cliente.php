<?php 
class Cliente{
    private $nome;
    private $email;
    private $ducomento;

    public function __construct($nome, $email, $documento)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->documento = $documento;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of ducomento
     */ 
    public function getDucomento()
    {
        return $this->ducomento;
    }
    }

    
