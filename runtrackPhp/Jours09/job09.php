<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jours08;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$sqlQuery =  "SELECT * FROM salles ORDER BY capacité DESC";
$sallesStatement = $mysqlClient->prepare($sqlQuery);
$sallesStatement->execute();
$salles = $sallesStatement->fetchAll();
?>

<table border="1">
    <thead>
        <tr>
        <th>ID</th>
            <th>Nom</th>
            <th>Capacité</th>
          

         </tr>   
    </thead>
    <?php  foreach ( $salles as $salle): ?>
        <tbody>
            <td><?php echo $salle['id']  ?></td> 
            <td><?php echo $salle['nom']  ?></td> 
            <td><?php echo $salle['capacité']  ?></td> 
          
         
    </tbody>
    <?php endforeach ?>
    </table>