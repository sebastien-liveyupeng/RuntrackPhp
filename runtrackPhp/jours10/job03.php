<?php

class Personne {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter() {
        return "Je suis " . $this->prenom . " " . $this->nom . ".";
    }
}

// Instanciation 
$personne1 = new Personne("Dupont", "Jean");
$personne2 = new Personne("doe", "Joen");

// Affichage 
echo $personne1->SePresenter() . "\n";
echo $personne2->SePresenter() . "\n";

?>
