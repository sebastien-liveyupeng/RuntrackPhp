<?php 
 //pour demarrer unesession :)
 session_start();


 // pour mettre le compeut a 0
 $_SESSION['nombrevisites'] = ($_SESSION['nombrevisites'] ?? 0) + 1;


// restart le compteur 
 if (isset($_POST['reset'])) {
    $_SESSION['nombrevisites'] = 0;
 }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
       
    <p>Nombre de visites : <!---pour commencer la session dans le html----><?php echo $_SESSION['nombrevisites']; ?> </p><!---->

    <!--  bouton reset -->
    <form method="post">
        <button type="submit" name="reset">Restaurer</button>
    </form>
</body>
</html>