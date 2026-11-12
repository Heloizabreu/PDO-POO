
<?php
class Animal {
    public function fazerSom() {
        return "Som do animal";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        return "Au Au";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        return "Miau";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

echo "Cachorro: " . $cachorro->fazerSom() . "<br>";
echo "Gato: " . $gato->fazerSom();
