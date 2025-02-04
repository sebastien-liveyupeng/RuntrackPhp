<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=jours08;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// requete SQL  pour ceux de moins de 18 ans seulement
$sqlQuery = "SELECT * FROM étudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) < 18";
$étudiantsStatement = $mysqlClient->prepare($sqlQuery);
$étudiantsStatement->execute();
$étudiants = $étudiantsStatement->fetchAll();
?>

<table border="1">
    <thead>
        <tr>
            <th>nom</th>
            <th>prénom</th>
            <th>naissance</th>
            <th>sexe</th>
            <th>email</th>

         </tr>   
    </thead>
    <?php  foreach ( $étudiants as $étudiant): ?>
        <tbody>
            <td><?php echo $étudiant['nom']  ?></td> 
            <td><?php echo $étudiant['prénom']  ?></td> 
            <td><?php echo $étudiant['naissance']  ?></td> 
            <td><?php echo $étudiant['sexe']  ?></td> 
            <td><?php echo $étudiant['email']  ?></td> 
         
    </tbody>
    <?php endforeach ?>
    </table>