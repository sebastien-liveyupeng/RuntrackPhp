<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jours08;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$sqlQuery ="SELECT * FROM étudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$étudiantsStatement = $mysqlClient->prepare($sqlQuery);
$étudiantsStatement->execute();
$étudiants = $étudiantsStatement->fetchAll();
?>

<table border="1">
    <thead>
        <tr>
            <th>nom</th>
            <th>prénom</th>
        
            <th>date naissance</th>
         </tr>   
    </thead>

    <?php  foreach ( $étudiants as $étudiant): ?>
        <tbody>
            <td><?php echo $étudiant['nom']  ?></td> 
            <td><?php echo $étudiant['prénom']  ?></td> 
          
            <td><?php echo $étudiant['naissance']  ?></td> 
    </tbody>

    <?php endforeach ?>
    </table>