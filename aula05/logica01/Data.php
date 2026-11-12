
<?php
class Data {
    public $dia;
    public $mes;
    public $ano;

    public function __construct($dia, $mes, $ano) {
        if (checkdate($mes, $dia, $ano)) {
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;
        } else {
            echo "Data inválida!";
        }
    }

    public function formatar() {
        return sprintf("%02d/%02d/%04d", $this->dia, $this->mes, $this->ano);
    }
}

$data = new Data(12, 11, 2026);

if (isset($data->dia)) {
    echo $data->formatar();
}
