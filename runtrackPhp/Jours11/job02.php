<?php

class Livre {
    private $titre;
    private $auteur;
    private $nombrePages;

    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages);
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
}

$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 96);
echo "Titre: " . $livre->getTitre() . ", Auteur: " . $livre->getAuteur() . ", Pages: " . $livre->getNombrePages() . "\n";

$livre->setNombrePages(120);
echo "Pages après modification: " . $livre->getNombrePages() . "\n";

$livre->setNombrePages(-5);

?>