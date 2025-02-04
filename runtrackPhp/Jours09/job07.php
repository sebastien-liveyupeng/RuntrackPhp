<?php
try {
    // Connexion à la base de données
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jours08;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Requête SQL pour calculer la superficie totale
$sqlQuery = "SELECT SUM(superficie) AS superficie_totale FROM étage";
$statement = $mysqlClient->prepare($sqlQuery);
$statement->execute();
$result = $statement->fetch(); // Utilisation de fetch() pour récupérer une seule ligne
?>

<table border="1">
    <thead>
        <tr>
            <th>Superficie Totale</th>
        </tr>   
    </thead>
    <tbody>
        <tr>
            <td><?php echo htmlspecialchars($result['superficie_totale']); ?></td>
        </tr>
    </tbody>
</table>
