





<?php
// (par défaut "style1")
$selectedStyle = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Styles</title>
  
    <link rel="stylesheet" href="<?= htmlspecialchars($selectedStyle) ?>.css">
</head>
<body>
    <form action="" method="post">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?= $selectedStyle === 'style1' ? 'selected' : '' ?>>Style 1</option>
            <option value="style2" <?= $selectedStyle === 'style2' ? 'selected' : '' ?>>Style 2</option>
            <option value="style3" <?= $selectedStyle === 'style3' ? 'selected' : '' ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>
