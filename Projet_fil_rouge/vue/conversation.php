<?php
session_start();
require_once "../connexion/connexion.php";

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: conversation2.php');
    exit;
}

// Récupère les informations de l'utilisateur connecté
$db = new db();
$conn = $db->getConnection();
$stmt = $conn->prepare('SELECT * FROM users WHERE id = :user_id');
$stmt->bindParam(':user_id', $_SESSION['user_id']);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Récupère la liste des amis de l'utilisateur
$stmt = $conn->prepare('SELECT * FROM friends WHERE user_id = :user_id');
$stmt->bindParam(':user_id', $_SESSION['user_id']);
$stmt->execute();
$friends = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacts</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <h1>Messages d'amis</h1>
    <p>Bienvenue <?php echo htmlspecialchars($user['nom']); ?> !</p>
    <form method="POST">
        <label for="friend_id">Sélectionnez un ami :</label>
        <select name="friend_id">
            <?php foreach ($friends as $friend) { ?>
                <?php
                    // Récupère les informations sur l'ami
                    $stmt = $conn->prepare('SELECT * FROM users WHERE id = :friend_id');
                    $stmt->bindParam(':friend_id', $friend['friend_id']);
                    $stmt->execute();
                    $friend_info = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <option value="<?php echo $friend_info['id']; ?>"><?php echo $friend_info['nom']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="message">Message :</label>
        <textarea name="message"></textarea>
        <br>
        <input type="submit" name="send_message" value="Envoyer le message">
    </form>

    <?php
    // Si le formulaire a été soumis
    if (isset($_POST['send_message'])) {
        $friend_id = $_POST['friend_id'];
        $message = $_POST['message'];

        // Envoie le message à l'ami sélectionné
        $current_date = date('Y-m-d H:i:s'); // Store the current date and time in a variable
        $stmt = $conn->prepare('INSERT INTO messages (contenu, date, id, discussion_id) VALUES (:message, :date, :sender_id, :recipient_id)');
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':date', $current_date); // Pass the variable instead of the function result
        $stmt->bindParam(':sender_id', $_SESSION['user_id']);
        $stmt->bindParam(':recipient_id', $friend_id);
        $stmt->execute();

        $success_message = 'Votre message a été envoyé !';
    }
    ?>

    <?php if (isset($success_message)) { ?>
        <p><?php echo $success_message; ?></p>
    <?php } ?>

    <footer>
        <nav>
            <ul>
                <li><a href="forum.php"><i class="fas fa-home"></i></a></li>
                <li><a href="amis.php"><i class="fas fa-user"></i></a></li>
                <li><a href="game.php"><i class="fas fa-gamepad"></i></a></li>
                <li><a href="chat.php"><i class="fas fa-envelope"></i></a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
