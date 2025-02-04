<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="job05.php" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required>
        <br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <br>
        
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
<?php
// Récupération des données 
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Vérification 
if ($username === "John" && $password === "Rambo") {
    echo "<h2>C'est pas ma guerre</h2>";
} else {
    echo "<h2>Votre pire cauchemar</h2>";
}
?>
