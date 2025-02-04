<?php
try {
    // Connexion à la base de données
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jours08;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Requête SQL pour compter le nombre total d'étudiants
$sqlQuery = "SELECT COUNT(*) AS nb_etudiants FROM étudiants";
$étudiantsStatement = $mysqlClient->prepare($sqlQuery);
$étudiantsStatement->execute();
$étudiant = $étudiantsStatement->fetch(); // Utilisation de fetch() pour récupérer une seule ligne
?>

<table border="1">
    <thead>
        <tr>
            <th>Nombre total d'étudiants</th>
        </tr>   
    </thead>
    <tbody>
        <tr>
            <td><?php echo htmlspecialchars($étudiant['nb_etudiants']); ?></td> 
        </tr>
    </tbody>
</table>
