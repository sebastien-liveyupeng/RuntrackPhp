<?php 

class Rectangle {
    private float $longueur;
    private float $largeur;

    public function __construct(float $longueur, float $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function perimetre(): float {
        return 2 * ($this->longueur + $this->largeur);
    }

    public function surface(): float {
        return $this->longueur * $this->largeur;
    }
}

class Parallelepipede extends Rectangle {
    private float $hauteur;

    public function __construct(float $longueur, float $largeur, float $hauteur) {
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    public function volume(): float {
        return $this->surface() * $this->hauteur;
    }
}

// Test
$rectangle = new Rectangle(5, 3);
echo "Périmètre : " . $rectangle->perimetre() . PHP_EOL;
echo "Surface : " . $rectangle->surface() . PHP_EOL;

$parallelepipede = new Parallelepipede(5, 3, 4);
echo "Volume : " . $parallelepipede->volume() . PHP_EOL;

?>
