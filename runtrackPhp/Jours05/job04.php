<?php 
function resultat($a ,$b, $c ){
    if ($b == '+') return $a + $c;
    if ($b == '-') return $a - $c;
    if ($b == '*') return $a * $c;
    if ($b == '/' && $c !=0) return $a / $c;
    if ($b == '%'&&  $c !=0 ) return $a % $c;
    return 'erreur';
}
?>