<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>
    <h2>Formulaire </h2>
    <form action="job03.php" method="POST">
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
// Compter le nombre d'arguments POST reçus
$nombre_arguments = count($_POST);

// Affiche  résultat
echo "<h2>Nombre d'arguments POST reçus : " . $nombre_arguments . "</h2>";

// Détail des arguments
if ($nombre_arguments > 0) {
    echo "<table border='1'>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";

    foreach ($_POST as $cle => $valeur) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($cle) . "</td>";
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>Aucun argument POST reçu.</p>";
}
?>
