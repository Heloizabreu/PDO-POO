<?php


//importando o controleinterface
require_once 'ControleInterface.php';
// Criando a classe Controle
class Controle implements ControleInterface {
    // Atributos
    private bool $status;
    private int $volume;
    private int $canal;

    // métodos:
    public function __construct()
    {
        $this->status = false;
        $this->volume = 30;
        $this->canal = 500;
    }

    public function ligar(){
        if($this->status){
            sleep(2);
            $this->status = false;
            return "Desligando...";
        }else{
            sleep(2);
            $this->status = true;
            return "Ligando...";
        }
    }

    public function aumentarVol(){
        if($this->status && $this->volume < 100){
            $this->volume+=1;
            return $this->volume;
        }else {
            return "Voluma máximo!";
        }
    }

    public function diminuirVol(){
        if($this->status && $this->volume > 0){
            $this->volume-=1;
            return $this->volume;
        } else {
            return "Mudo";
        }
    }

    public function aumentarCanal(){
        if($this->status && $this->canal < 500){
            $this->canal-=1;
            return $this->canal;
        }else{
            $this->canal = 500;
            return $this->canal;
        }
    }

    public function mutar(){
        $this->volume = 0;
        return "Mudo";

    }

    public function getStatus() {
    return"
Ligado?: " . ($this->status?"Ligado":"Desligado") . "
Volume: {$this->volume}
Canal: {$this->canal}
";
}
}
?>
```