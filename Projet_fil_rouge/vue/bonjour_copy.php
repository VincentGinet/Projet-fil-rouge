<?php
// Démarrer une session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    // L'utilisateur est connecté
    $email = $_SESSION['email'];
    echo "Bonjour $email, tu es bien connecté. Tu vas pouvoir accéder à l'accueil.";
} else {
    // L'utilisateur n'est pas connecté
    echo "Bonjour, vous êtes prié de vous connecter si vous voulez pouvoir accéder à l'accueil.";
}

// Démarrer une session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    // L'utilisateur est connecté
    $email = $_SESSION['email'];
    echo "Bonjour $email, tu es bien connecté. Tu vas pouvoir accéder à l'accueil.";
} else {
    // L'utilisateur n'est pas connecté
    echo "Bonjour, vous êtes prié de vous connecter si vous voulez pouvoir accéder à l'accueil.";
}


// Démarrer une session
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['email'])) {
    // L'utilisateur est connecté
    $email = $_SESSION['email'];
    echo "Bonjour $email, tu es bien connecté. Tu vas pouvoir accéder à l'accueil.";
} else {
    // L'utilisateur n'est pas connecté
    echo "Bonjour, vous êtes prié de vous connecter si vous voulez pouvoir accéder à l'accueil.";
}
?>