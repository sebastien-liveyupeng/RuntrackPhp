<?php

class Student {
    private $nom;
    private $prenom;
    private $id;
    private $credits;
    private $level;

    public function __construct($nom, $prenom, $id) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->id = $id;
        $this->level = $this->studentEval();
    }

    private function studentEval() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    public function studentInfo() {
        echo "Nom: " . $this->nom . "\n";
        echo "Prénom: " . $this->prenom . "\n";
        echo "id: " . $this->id . "\n";
        echo "Niveau: " . $this->level . "\n";
    }
}

$etudiant = new Student("John", "Doe", 145);

$etudiant->studentInfo();

?>