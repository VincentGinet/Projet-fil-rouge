<?php
// Connexion à la base de données
require_once('../connexion/connexion3.php');

// Démarrage de la session
session_start();

if (isset($_SESSION['mail'])) {
    // L'utilisateur est connecté
    $mail = $_SESSION['mail'];
    $query = $db->prepare('SELECT * FROM users WHERE mail = :mail');
    $query->bindParam(':mail', $mail);
    $query->execute(); // il faut exécuter la requête pour récupérer les données
    $result = $query->fetchAll();
    echo "Bonjour $mail, vous êtes bien connecté. Vous pouvez accéder à l'accueil.";
    if(count($result) > 0) { // Vérifier si l'utilisateur existe dans la base de données
        $mail = $result[0]['mail'];
        echo "<br>Bienvenue, $mail.";
    }
} else {
    // L'utilisateur n'est pas connecté
    echo "Bonjour, vous êtes prié de vous connecter si vous voulez pouvoir accéder à l'accueil.";
}
?>