<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jours08;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$sqlQuery = 'SELECT * FROM salles';
$salleStatement = $mysqlClient->prepare($sqlQuery);
$salleStatement->execute();
$salles = $salleStatement->fetchAll();
?>

<table border="1">
    <thead>
        <tr>
            <th>nom</th>
            <th>capacité</th>
         </tr>   
    </thead>
    <?php  foreach ( $salles as $salle): ?>
        <tbody>
            <td><?php echo $salle['nom']  ?></td> 
            <td><?php echo $salle['capacité']  ?></td> 
         
    </tbody>
    <?php endforeach ?>
    </table>