<?php
require_once('../connexion/connexion3.php');
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
    <label class="nom" for="nom">Nom</label>
    <input class="Nom" type="Nom" name="Nom"><br><br>
    <label class="Prenom" for="Prenom">Pseudo</label>
    <input class="prénom" type="prénom" name="Prénom"><br><br>
    <label class="Pseudo" for="Pseudo">Pseudo</label>
    <input class="pseudo" type="Pseudo" name="Pseudo" required><br><br>
    <label class="Date" for="date">Date de naissance : </label>
    <input class="date" type="date" name="date"><br><br>
    <label class="email" for="mail">Addresse mail : </label>
    <input class="mail" type="mail" name="email" required><br><br>
    <label class="motdepasse" for="password">Mot de passe:</label>
    <input class="password" type="password" name="password" required><br><br>
    <label for="bio">Bio (en option):</label>
    <input type="bio" name="bio"><br><br>
    
    <?php if (isset($message)) { echo $message; } ?>
</form>

<form action="../vue/filtre.php" method="POST">
    <input class="continuer" type="submit" value="CONTINUER">
</form>

<?php include("../templates/template.php") ?>