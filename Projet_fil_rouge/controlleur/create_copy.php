<?php
// Inclure le fichier de configuration de la base de données
require_once('../connexion/connexion.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Récupérer les valeurs du formulaire
  $mail = $_POST['mail'];
  $mot_de_passe = $_POST['password'];

  // Préparer la requête SQL pour insérer un nouvel utilisateur
  $sql = "INSERT INTO users (mail, password) 
          VALUES (:mail, :password)";

  // Préparer la requête pour l'exécution
  $stmt = $db->prepare($sql);

  // Liaison des valeurs du formulaire avec les paramètres de la requête
  $stmt->bindParam('mail', $mail);
  // $stmt->bindParam('', $password);

  // Exécuter la requête SQL
  if ($stmt->execute()) {
    // Rediriger l'utilisateur vers la page de connexion
    require_once('../controlleur/login_copy.php');
    exit;
  } else {
    // Afficher un message d'erreur en cas d'échec de l'insertion
    $erreur = "Une erreur s'est produite lors de la création de votre compte.";
  }
}
?>
 


<form action="../vue/bonjour_copy.php" method="post">
    <!-- si message d'erreur on l'affiche -->
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <div class="mb-3">
        <label for="mail" class="form-label">Email pour la création du compte</label>
        <input type="email" class="form-control" id="mail" name="mail" aria-describedby="mail-help" placeholder="you@exemple.com">
        <div id="mail-help" class="form-text">L'email utilisé lors de la création de compte.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>