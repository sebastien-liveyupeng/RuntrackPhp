<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire </title>
</head>

<body>
    <form action="job01.php" method="GET">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="age">Âge :</label>
        <input type="text" name="age" id="age">
        <br>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>
<?php
// Compter le nombre d'arguments GET
$nombre_arguments = count($_GET);
echo "Nombre d'arguments  : " . $nombre_arguments;
?>
