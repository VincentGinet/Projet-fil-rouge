<?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=projet_fil_rouge;charset=utf8', 'root', '');
// Démarrer une session
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['mail'])) {
    // L'utilisateur est connecté
    $mail = $_SESSION['email'];
    $query = $db->prepare('SELECT mail FROM users WHERE mail = :mail');
    $query->bindParam(':id', $id);
    $result = $query->fetch();
    echo "Bonjour $mail, tu es bien connecté. Tu vas pouvoir accéder à l'accueil.";
} else {
    // L'utilisateur n'est pas connecté
    echo "Bonjour, vous êtes prié de vous connecter si vous voulez pouvoir accéder à l'accueil.";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="../css/style.css"> -->
	<title>Projet Fil Rouge</title>
</head>
<body>
		<a href="../controlleur/test_login.php">Clique ici pour t'identifier</a>
</body>
</html>