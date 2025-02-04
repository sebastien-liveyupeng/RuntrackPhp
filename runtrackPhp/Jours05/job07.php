<form method="post">
    <label for="str">Texte:</label>
    <input type="text" name="str" id="str" required>

    <label for="operation">Transformation:</label>
    <select name="operation" id="operation">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>

    <button type="submit">Valider</button>
</form>
<?php
function gras($str) {
    return str_replace(range('A', 'Z'), array_map(fn($l) => "<strong>$l</strong>", range('A', 'Z')), $str);
}

function cesar($str, $decal = 2) {
    $result = '';
    foreach (str_split($str) as $char) {
        $result .= ctype_alpha($char) ? chr((ord($char) + $decal - (ctype_upper($char) ? 65 : 97)) % 26 + (ctype_upper($char) ? 65 : 97)) : $char;
    }
    return $result;
}

function plateforme($str) {
    return str_ireplace('me', 'me_', $str);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $operation = $_POST['operation'];

    if ($operation == 'gras') echo gras($str);
    elseif ($operation == 'cesar') echo cesar($str);
    elseif ($operation == 'plateforme') echo plateforme($str);
    else echo "Opération non reconnue.";
}
?>
