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
        echo "Je vais en cours" ;
    }

    // 
    public function afficherAge(): void {
        echo "J’ai " . $this->age . " ans."  ;
    }
}

class Professeur extends Personne {
    private string $matiereEnseignee;

    public function __construct(string $matiereEnseignee, int $age = 40) {
        parent::__construct($age); //
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(): void {
        echo "Le cours va commencer" ;
    }

    public function getMatiereEnseignee(): string {
        return $this->matiereEnseignee;
    }
}


$eleve = new Eleve();
$eleve->bonjour();         
$eleve->allerEnCours();    
$eleve->modifierAge(15);   
$eleve->afficherAge();    

// Instanciation 
$professeur = new Professeur("Mathématiques", 40);
$professeur->bonjour(); 
$professeur->enseigner();  

?>
