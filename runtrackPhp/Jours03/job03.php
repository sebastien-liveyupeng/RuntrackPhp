<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $voyelles)) {
        echo $str[$i];
    }
}
// in-array verifie si la lettre est dans le tableau alors si elle apparait elle sera afficher par echo
?>
