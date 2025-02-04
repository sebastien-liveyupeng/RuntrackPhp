<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jours08;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$sqlQuery = "SELECT salles.nom AS nom_salle, étage.nom AS nom_étage
             FROM salles
             JOIN étage ON salles.id_étage = étage.id";

$salleStatement = $mysqlClient->prepare($sqlQuery);
$salleStatement->execute();
$salles = $salleStatement->fetchAll();
?>

<table border="1">
    <thead>
        <tr>
            <th>nom salle</th>
            <th>nom étage</th>
         </tr>   
    </thead>
    <?php  foreach ( $salles as $salle): ?>
        <tbody>
            <td><?php echo $salle['nom_salle']  ?></td> 
            <td><?php echo $salle['nom_étage']  ?></td> 
         
    </tbody>
    <?php endforeach ?>
    </table>