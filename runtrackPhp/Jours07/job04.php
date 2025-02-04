<?php
// Connexion 
if (isset($_POST['connexion'])) {
    setcookie("prenom", $_POST['prenom'], time() + 86400); //  1 jour
    header("Location: " . $_SERVER['PHP_SELF']); // restartpage
    exit();
}

// Déconnexion 
if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']); // Recharger la page
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom'])): ?>
        <h1>Bonjour <?php echo htmlspecialchars($_COOKIE['prenom']); ?> !</h1>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
            <?php else: ?>
        <h1>Connexion</h1>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>