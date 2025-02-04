<?php
// Démarrer la session
session_start();

// Ajouter un prénom 
if (isset($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

// Réinitialiser 
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms</title>
</head>
<body>
   
    <!--  pour ajouter un prénom -->
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" >
        <button type="submit">Ajouter</button>
    </form>

    <!-- Afficher la liste  -->
    <h2>Liste  :</h2>
    <ul>
        <?php
        if (!empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>" . htmlspecialchars($prenom) . "</li>";
            }
        } else {
            echo "<p>Y'a nada.</p>";
        }
        ?>
    </ul>

    <!-- Bouton pour réinitialiser  -->
    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>