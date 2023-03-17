<?php
// Connexion à la base de données
require_once('../connexion/connexion3.php');

$message="";

// Démarrer une session
session_start();

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION ['email'])) {
    // Rediriger l'utilisateur vers la page d'accueil s'il est déjà connecté
    header("Location: http://localhost/Projet_fil_rouge/vue/test_bonjour.php");
    exit();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['email']) && !empty($_POST['email'])) {
    // Récupérer les données soumises via le formulaire
    
    $mail = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);


    $sql = 'SELECT * FROM users WHERE password=:password AND mail=:mail';
    $query = $db->prepare($sql);
    $query->bindValue(':password', $password);
    $query->bindValue(':mail', $mail);
    $query->execute();
    $info = $query->fetch(PDO::FETCH_ASSOC);

    if(empty($info))
    {
        
        $message = "Adresse e-mail ou mot de passe incorrect. Veuillez réessayer.";
    }
    else{
        $_SESSION['mail'] = $_POST['email'];
        header("Location: http://localhost/Projet_fil_rouge/vue/bonjour.php");
    }

}

// Fermeture de la connexion à la base de données
?>

<!-- Formulaire de connexion -->
<form method="post" action="">
    <label class="email" for="email">Mail : </label>
    <input class="mail" type="email" name="email" required><br><br>
    <label class="motdepasse"for="password">Mot de passe :</label>
    <input class="password" type="password" name="password" required><br><br>
    <input class="accueil"type="submit" value="Accédez a l'accueil"><br><br>
    <?php if (isset($message)) { echo $message; } ?>
</form>
<p class="logo">
    <img class="google" src="../login/images/logo_google_1.png">   
    <img class="facebook" src="../login/images/logo_facebook_1.png">
    <img class="discord" src="../login/images/logo_discord_1.png">
    <img class="playstation" src="../login/images//logo_playsationpng_1.png">
</p>

<p class="logo2">
    <img class="epic" src="../login/images/logo_epic_1.png">
    <img class="xbox" src="../login/images/logo_xbox_1.png">
    <img class="steam" src="../login/images/logo_steam_1.png">
    <img class="nintendo" src="../login/images/nintendo_logo_icon_1.png">
</p>