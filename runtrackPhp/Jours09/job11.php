<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jours08;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$sqlQuery =    "SELECT AVG(capacité) AS capacité_moyenne FROM salles;";
$sallesStatement = $mysqlClient->prepare($sqlQuery);
$sallesStatement->execute();
$salles = $sallesStatement->fetchAll();
?>

<table border="1">
    <thead>
        <tr>
            <th>capacité moyenne</th>
          
         </tr>   
    </thead>
    <?php  foreach ( $salles as $salle): ?>
        <tbody>
            <td><?php echo $salle['capacité_moyenne'] ?></td> 
           
         
    </tbody>
    <?php endforeach ?>
    </table>