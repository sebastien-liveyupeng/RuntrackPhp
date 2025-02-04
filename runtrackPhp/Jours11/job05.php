<?php

class Voiture {
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche;
    private $reservoir;

    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->en_marche = false;
        $this->reservoir = 50;
    }

    public function getMarque() {
        return $this->marque;
    }
    public function getModele() {
        return $this->modele;
    }
    public function getAnnee() {
        return $this->annee;
    }
    public function getKilometrage() {
        return $this->kilometrage;
    }
    public function getEnMarche() {
        return $this->en_marche;
    }
    public function getReservoir() {
        return $this->reservoir;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }
    public function setModele($modele) {
        $this->modele = $modele;
    }
    public function setAnnee($annee) {
        $this->annee = $annee;
    }
    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
    }
    public function setReservoir($reservoir) {
        $this->reservoir = $reservoir;
    }

    private function verifier_plein() {
        return $this->reservoir;
    }

    public function demarrer() {
        if ($this->verifier_plein() > 5) {
            $this->en_marche = true;
            echo "La voiture démarre.\n";
        } else {
            echo "Carburant insuffisant pour démarrer.\n";
        }
    }

    public function arreter() {
        $this->en_marche = false;
        echo "La voiture est arrêtée.\n";
    }
}

$voiture = new Voiture("Toyota", "Corolla", 2020, 30000);
echo "Réservoir initial: " . $voiture->getReservoir() . " litres\n";

$voiture->demarrer();

$voiture->setReservoir(4);
$voiture->demarrer();

?>