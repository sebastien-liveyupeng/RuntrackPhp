<?php

class Point {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints() {
        return "Coordonnées: (" . $this->x . ", " . $this->y . ")";
    }

    public function afficherX() {
        return "X: " . $this->x;
    }

    public function afficherY() {
        return "Y: " . $this->y;
    }

    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

// Instanciation 
$point1 = new Point(3, 4);
echo $point1->afficherLesPoints() . "\n";
echo $point1->afficherX() . "\n";
echo $point1->afficherY() . "\n";

$point1->changerX(10);
$point1->changerY(20);
echo $point1->afficherLesPoints() . "\n";

?>
