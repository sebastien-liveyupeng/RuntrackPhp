<?php 
// Nom du cookie
$cookieName = "nombrevisites";

// initialise cookie
$nombrevisites = isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] + 1 : 1;

// 1jours max
setcookie($cookieName, $nombrevisites, time() + 86400); //  = 1 jour

// Restart 
if (isset($_POST['reset'])) {
    $nombrevisites = 0;
    setcookie($cookieName, $nombrevisites, time() - 3600); // Supprime le cookie
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cookie</title>
</head>
<body>
   
    <p>Nombre de visites : <?php echo $nombrevisites; ?></p>

    <!-- réinitialiser le compteur -->
    <form method="post">
        <button type="submit" name="reset">Restart</button>
    </form>
</body>
</html>