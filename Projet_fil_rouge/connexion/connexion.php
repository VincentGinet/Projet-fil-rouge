<?php
// Informations de connexion à la base de données
$databaseDNS        = 'mysql:host=localhost;dbname=projet_fil_rouge';
$databaseUsername     = 'root';
$databasePassword     = '';

//require_once '../controlleur/create.php';
// Connexion à la base de données

try {
    $db = new PDO($databaseDNS, $databaseUsername, $databasePassword);
} catch (PDOException $exception) {
    echo 'Erreur de connexion : ' . $exception->getMessage();
    die();
}

// Vérification de la connexion

echo "Connexion réussie";
?>


