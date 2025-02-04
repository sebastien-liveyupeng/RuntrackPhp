<?php

class Livre {
    private $titre;
    private $auteur;
    private $nombrePages;
    private $disponible;

    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages);
        $this->disponible = true;
    }

    public function getTitre() {
        return $this->titre;
    }
    
    public function getAuteur() {
        return $this->auteur;
    }
    
    public function getNombrePages() {
        return $this->nombrePages;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }
    
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }
    
    public function setNombrePages($nombrePages) {
        if (is_int($nombrePages) && $nombrePages > 0) {
            $this->nombrePages = $nombrePages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.\n";
        }
    }

    public function verification() {
        return $this->disponible;
    }

    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false;
            echo "Le livre a été emprunté.\n";
        } else {
            echo "Le livre n'est pas disponible pour emprunt.\n";
        }
    }

    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true;
            echo "Le livre a été rendu.\n";
        } else {
            echo "Le livre est déjà disponible.\n";
        }
    }
}

$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 96);
echo "Disponibilité initiale: " . ($livre->verification() ? "Disponible" : "Indisponible") . "\n";

$livre->emprunter();
echo "Disponibilité après emprunt: " . ($livre->verification() ? "Disponible" : "Indisponible") . "\n";

$livre->rendre();
echo "Disponibilité après retour: " . ($livre->verification() ? "Disponible" : "Indisponible") . "\n";

?>