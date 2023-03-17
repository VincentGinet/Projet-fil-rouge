<?php if(!isset($loggedUsers)): ?>

<?php

$user="";
$users=[""];


// Validation du formulaire
if (isset($_POST['mail']) &&  isset($_POST['password'])) {
    // foreach ($users as $users) {
        if (
            $users['mail'] === $_POST['mail'] &&
            $users['password'] === $_POST['password']
        ) {
            $loggedUsers = [
                'mail' => $users['mail'],
            ];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['mail'],
                $_POST['password']
            );
        }
    }
?>