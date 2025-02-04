<?php

class Operation {
    private $nombre1;
    private $nombre2;

    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function getNombre1() {
        return $this->nombre1;
    }

    public function getNombre2() {
        return $this->nombre2;
    }
}

// Instanciation de la classe
$operation1 = new Operation();

// Affichage des attributs
echo "Nombre1: " . $operation1->getNombre1() . "\n";
echo "Nombre2: " . $operation1->getNombre2() . "\n";

?>