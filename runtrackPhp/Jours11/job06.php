<?php

class Commande {
    private $numeroCommande;
    private $plats;
    private $statut;
    private const TVA = 0.2;

    public function __construct($numeroCommande) {
        $this->numeroCommande = $numeroCommande;
        $this->plats = [];
        $this->statut = "en cours";
    }

    public function ajouterPlat($nom, $prix) {
        if ($this->statut === "en cours") {
            $this->plats[$nom] = $prix;
            echo "Plat ajouté: $nom - Prix: $prix €\n";
        } else {
            echo "Impossible d'ajouter un plat, la commande est {$this->statut}.\n";
        }
    }

    public function annulerCommande() {
        if ($this->statut === "en cours") {
            $this->statut = "annulée";
            $this->plats = [];
            echo "La commande a été annulée.\n";
        } else {
            echo "Impossible d'annuler une commande déjà {$this->statut}.\n";
        }
    }

    private function calculerTotal() {
        return array_sum($this->plats);
    }

    public function calculerTVA() {
        return $this->calculerTotal() * self::TVA;
    }

    public function afficherCommande() {
        echo "Numéro de commande: " . $this->numeroCommande . "\n";
        echo "Statut: " . $this->statut . "\n";
        echo "Plats commandés:\n";
        foreach ($this->plats as $nom => $prix) {
            echo "- $nom : $prix €\n";
        }
        $total = $this->calculerTotal();
        echo "Total à payer (HT): " . $total . " €\n";
        echo "TVA (20%): " . $this->calculerTVA() . " €\n";
        echo "Total à payer (TTC): " . ($total + $this->calculerTVA()) . " €\n";
    }
}

$commande = new Commande(101);
$commande->ajouterPlat("Pizza", 12);
$commande->ajouterPlat("Pâtes", 8);
$commande->afficherCommande();
$commande->annulerCommande();
$commande->afficherCommande();

?>