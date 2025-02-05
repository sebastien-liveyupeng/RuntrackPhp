<?php 

class Forme {
    public function aire(): float {
        return 0;
    }
}

class Rectangle extends Forme {
    private float $largeur, $hauteur;

    public function __construct(float $largeur, float $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function aire(): float {
        return $this->largeur * $this->hauteur;
    }
}

// Test
$rectangle = new Rectangle(5, 3);
echo $rectangle->aire(); 

?>
