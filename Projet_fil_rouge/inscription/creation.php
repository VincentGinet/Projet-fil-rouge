<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création</title>
</head>
<body>
    <?php
require_once('../connexion/connexion.php');
$pseudo="";
$date="";
$mail="";
$password="";

// Vérification que les données ont été soumises via le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données soumises via le formulaire
    $pseudo = $_POST["Pseudo"];
    $mail = $_POST["email"];
    $password = $_POST["password"];
    $date = $_POST["date"];
    // Préparation et exécution de la requête SQL pour insérer un nouvel utilisateur
    $sql = "INSERT INTO users (pseudo, mail, password, date) VALUES ('$pseudo','$mail', '$password', '$date')";
    if ($db->query($sql) !== FALSE ) {
        // Affichage d'un message de confirmation si l'utilisateur a été créé avec succès
        $message = "L'utilisateur a été créé avec succès.";
    }
}
?>

<!-- Formulaire pour créer un nouvel utilisateur -->
<form method="post" action="">
    <label class="Nomlabel"for="nom">Nom:</label> 
    <input class="nom"type="text" name="nom" id="nom" required><br><br>
    
    <label class="Prenomlabel"for="prenom">Prénom:</label>
    <input class="prénom"type="text" name="prenom" id="prenom" required><br><br>
    
    <label class="Datelabel"for="date_naissance">Date de naissance:</label>
    <input class="date"type="date" name="date_naissance" id="date_naissance" required><br><br>
    
    <label class="Pseudolabel"for="pseudo">Pseudo:</label>
    <input class="pseudo"type="text" name="pseudo" id="pseudo" required><br><br>
    
    <label class="Emaillabel"for="email">Adresse email:</label>
    <input class="mail"type="email" name="email" id="email" required><br><br>
    
    <label class="Motdepasselabel"for="mot_de_passe">Mot de passe:</label>
    <input class="password"type="password" name="mot_de_passe" id="mot_de_passe" required><br><br>
    
    <?php if (isset($message)) { echo $message; } ?>
    
    
</form>

<form action="../vue/filtre.php" method="POST">
    <input class="continuer" type="submit" value="CONTINUER">
</form>

<h5 class="ou">Ou connecter vous avec : </h5>

<p class="logo_inscription">
    <img src="../inscription/images/Logo haut.svg">
</p>

<p class="logo2_inscription">
<img src="../inscription/images/Logo bas.svg">
</p>

<?php include("../templates/template.php") ?>

</body>
</html>




