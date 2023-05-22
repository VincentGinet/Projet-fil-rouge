<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Conversation</title>
</head>
<body>
<?php
// Connexion à la base de données
require_once('../connexion/connexion.php');



$message = "Salut salut comment va tu ? Tu as tester le nouveau zelda ?";
$class = "mon-message";

echo '<div class="' . $class . '">' . $message . '</div>';

?>

<p>Ceci est une page de discution</p>
</body>




<?php include("../templates/template.php") ?>

<?php include("../templates/template_2_convers.php") ?>