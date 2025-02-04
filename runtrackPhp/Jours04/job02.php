<?php
// Vérification si des arguments  sont présents.
if (!empty($_GET)) {
    echo "<h2>Liste des arguments GET reçus</h2>";
    echo "<table border='1'>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";

    // Parcours des arguments  et affiche dans le tableau.
    foreach ($_GET as $cle => $valeur) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($cle) . "</td>";
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>Aucun argument GET reçu.</p>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>

    
</head>
<body>
    <h2>Formulaire </h2>
    <form action="job02.php" method="GET">
        <label for="nom">Nom et prenom :</label>
        <input type="text" name="nom" id="nom" required>
        <br>
        <label for="age">Âge :</label>
        <input type="number" name="age" id="age" required>
        <br>
        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville">
        <br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
