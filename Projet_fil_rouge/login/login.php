<?php
// Connexion à la base de données
require_once('../connexion/connexion.php');

$message="";

// Démarrer une session
session_start();

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION ['email'])) {
    // Rediriger l'utilisateur vers la page d'accueil s'il est déjà connecté
    header("Location: http://localhost/Projet_fil_rouge/vue/accueil.php");
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
        header("Location: http://localhost/Projet_fil_rouge/vue/accueil.php");
    }

}

// Fermeture de la connexion à la base de données
?>

<!-- Formulaire de connexion -->
<form method="post" action="">
    <label class="email2" for="email">Mail : </label>
    <input class="mail2" type="email" name="email" required><br><br>
    <label class="motdepasse2"for="password">Mot de passe :</label>
    <input class="password2" type="password" name="password" required><br><br>
    <input class="accueil"type="submit" value="Accédez a l'accueil"><br><br>
    <?php if (isset($message)) { echo $message; } ?>
</form>
<p class="logo">
    <img src="../login/images/Logo haut.svg">
</p>

<p class="logo2">
    <img src="../login/images/Logo bas.svg">
</p>