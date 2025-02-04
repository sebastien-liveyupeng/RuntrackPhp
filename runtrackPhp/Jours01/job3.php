<?php
// Déclaration des variables primitives
$booleanVar = true;                 // Booléen
$intVar = 42;                      // Entier
$stringVar = "Hello LaPlateforme"; // Chaîne de caractères
$floatVar = 3.14;                  // Nombre à virgule flottante
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Variables PHP</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px auto; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2 style="text-align: center;">Tableau des Variables PHP</h2>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <!-- Affichage direct avec des lignes PHP -->
        <tr>
            <td><?php echo gettype($booleanVar); ?></td>
            <td>booleanVar</td>
            <td><?php echo $booleanVar ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($intVar); ?></td>
            <td>intVar</td>
            <td><?php echo $intVar; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($stringVar); ?></td>
            <td>stringVar</td>
            <td><?php echo $stringVar; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($floatVar); ?></td>
            <td>floatVar</td>
            <td><?php echo $floatVar; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
