<?php 
$nombres = [200, 204, 173, 98, 171, 404, 459];

echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Parité</th></tr>";

foreach ($nombres as $nombres) {
    $parity = ($nombres % 2 == 0) ? 'paire' : 'impaire';
    echo "<tr><td>$nombres</td><td>$parity</td></tr>";
}

echo "</table>";





?>