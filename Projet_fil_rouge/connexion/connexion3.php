<?php
// Informations de connexion à la base de données
$databaseDNS        = 'mysql:host=localhost;dbname=projet_fil_rouge';
$databaseUsername     = 'root';
$databasePassword     = '';



try {
    $db = new PDO($databaseDNS, $databaseUsername, $databasePassword);
} catch (PDOException $exception) {
    echo 'Erreur de connexion : ' . $exception->getMessage();
    die();
}



// Vérification de la connexion

//echo "Connexion réussie";
?>