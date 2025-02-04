<?php
echo"Voici la liste sans 26, 37, 88 et 1111:";
echo "</br>";
for ($i = 0; $i <= 1337; $i++) {
    if (in_array($i, [26, 37, 88, 1111])) {
        continue; // Passe au nombre suivant si le nombre est dans la liste
    }
    echo $i . "<br>";
}
?>
