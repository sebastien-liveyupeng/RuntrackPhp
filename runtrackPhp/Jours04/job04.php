<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>
    <h2>Formulaire </h2>
    <form action="job04.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <br>
        <label for="age">Âge :</label>
        <input type="number" name="age" id="age" required>
        <br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email">
        <br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
<?php
// Fonction pour afficher les arguments POST sous forme de tableau
function afficherArgumentsPost($data) {
    echo "<h2>Affichage arguments POST reçus</h2>";
    echo "<table border='1'>";
    echo "<thead><tr><th>Nom du champ</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";
    
    foreach ($data as $cle => $valeur) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($cle) . "</td>";
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
}

// Vérification et appel de la fonction si des données POST existent
if (!empty($_POST)) {
    afficherArgumentsPost($_POST);
} else {
    echo "<p>Aucune donnée POST reçue.</p>";
}
?>
