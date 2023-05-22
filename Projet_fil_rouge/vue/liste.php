<?php
require_once('../connexion/connexion.php');



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mon titre</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<p>Page d'ami</p>
<ul>
    <li class="friends">Vincent </li>
    <li class="age">23 ans </li>
    <li class="jeu">Zelda TOTK </li>
</ul>

<?php include("../templates/template.php") ?>
<?php include("../templates/footer/footer_barre_outil_amis.php") ?>
</body>
</html>