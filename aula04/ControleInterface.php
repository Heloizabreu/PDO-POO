<?php
//Criando a interface para o controle
interface ControleInterface{
    public function ligar();
    public function aumentarVol();
    public function diminuiVol();
    public function aumentaCanal();
    public function diminuiCanal();
    public function mudo();
}
?>
```