<?php 

class Personne {
    protected int $age; // 

    public function __construct(int $age = 14) {
        $this->age = $age;
    }

    public function afficherAge(): void {
        echo "J'ai " . $this->age . " ans." . PHP_EOL;
    }

    public function bonjour(): void {
        echo "Hello" . PHP_EOL;
    }

    public function modifierAge(int $nouvelAge): void {
        if ($nouvelAge >= 0) {
            $this->age = $nouvelAge;
        } else {
            echo "L'âge doit être un entier positif." . PHP_EOL;
        }
    }
}

class Eleve extends Personne {

    public function allerEnCours(): void {
        echo "Je vais en cours" . PHP_EOL;
    }

    
    public function afficherAge(): void {
        echo "J’ai " . $this->age . " ans." . PHP_EOL;
    }
}

class Professeur extends Personne {
    private string $matiereEnseignee;

    public function __construct(string $matiereEnseignee, int $age = 30) {
        parent::__construct($age);
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(): void {
        echo "Le cours va commencer" . PHP_EOL;
    }

    public function getMatiereEnseignee(): string {
        return $this->matiereEnseignee;
    }
}

// Instanciation 
$personne = new Personne(40); 
$eleve = new Eleve(); 

// âge de l'élève
$eleve->afficherAge(); 


?>
