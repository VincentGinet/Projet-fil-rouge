<?php include("../templates/template.php");?>

<?php require_once('../connexion/connexion.php')
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>La page filtre</title>
</head>

<body>
    <img class="sliders" src="../image/sliders-horizontal.png">
    <div><span class="filtres">Filtres</span></div>
    <ul>
        <li class="filtre">
            <!-- La ligne des jeux de courses -->
            <img class="course" src="../image/courses.png">
            <p class="courses">Jeu de courses</p>
            <!-- Image logo valider -->
            <form action="" method="POST">
                <input type="radio" id="valider1" name="courses" value="valider" class="masque">
                <label for="valider1">
                    <img class="imgvalider" src="../image/valider.png">
                </label>

                <!-- Image logo refuser -->
                <input type="radio" id="refuser1" name="courses" value="refuser" class="masque">
                <label for="refuser1">
                    <img class="imgrefuser" src="../image/refuser.png">
                </label>
            </form>

            <!-- La ligne des jeux d'arcades -->
            <img class="arcade" src="../image/arcade.png">
            <p class="arcades">Jeu style arcade</p>
            <!-- Image logo valider -->
            <form action="" method="POST">
                <input type="radio" id="valider2" name="arcades" value="valider" class="masque">
                <label for="valider2">
                    <img class="imgvalider2" src="../image/valider.png">
                </label>

                <!-- Image logo refuser -->
                <input type="radio" id="refuser2" name="arcades" value="refuser" class="masque">
                <label for="refuser2">
                    <img class="imgrefuser2" src="../image/refuser.png">
                </label>
            </form>

            <!-- La ligne des jeux de rôle -->
            <img class="rpg" src="../image/rpg.png">
            <p class="roles">Jeu de rôle</p>
            <!-- Image logo valider -->
            <form action="" method="POST">
                <input type="radio" id="valider3" name="roles" value="valider" class="masque">
                <label for="valider3">
                    <img class="imgvalider3" src="../image/valider.png">
                </label>

                <!-- Image logo refuser -->
                <input type="radio" id="refuser3" name="roles" value="refuser" class="masque">
                <label for="refuser3">
                    <img class="imgrefuser3" src="../image/refuser.png">
                </label>
            </form>

            <!-- La ligne des jeux de tir -->
           
            <img class="tir" src="../image/tir.png">
            <p class="tirs">Jeu de tir</p>
            <!-- Image logo valider -->
            <form action="" method="POST">
                <input type="radio" id="valider4" name="tirs" value="valider" class="masque">
                <label for="valider4">
                    <img class="imgvalider4" src="../image/valider.png">
                </label>

                <!-- Image logo refuser -->
                <input type="radio" id="refuser4" name="tirs" value="refuser" class="masque">
                <label for="refuser4">
                    <img class="imgrefuser4" src="../image/refuser.png">
                </label>
            </form>

            <!-- La ligne des jeux multijoueurs -->
            <img class="multi" src="../image/multi.png">
            <p class="multijoueurs">Jeu multijoueur</p>
            <!-- Image logo valider -->
            <form action="" method="POST">
                <input type="radio" id="valider5" name="multijoueurs" value="valider" class="masque">
                <label for="valider5">
                    <img class="imgvalider5" src="../image/valider.png">
                </label>

                <!-- Image logo refuser -->
                <input type="radio" id="refuser5" name="multijoueurs" value="refuser" class="masque">
                <label for="refuser5">
                    <img class="imgrefuser5" src="../image/refuser.png">
                </label>
            </form>

            <!-- La ligne des jeux d'horreur -->
            <img class="ptitfantome" src="../image/ptitfantome.png">
            <p class="horreurs">Jeu d'horreur</p>
            <!-- Image logo valider -->
            <form action="" method="POST">
                <input type="radio" id="valider6" name="horreurs" value="valider" class="masque">
                <label for="valider6">
                    <img class="imgvalider6" src="../image/valider.png">
                </label>

                <!-- Image logo refuser -->
                <input type="radio" id="refuser6" name="horreurs" value="refuser" class="masque">
                <label for="refuser6">
                    <img class="imgrefuser6" src="../image/refuser.png">
                </label>
            </form>
        </li>
    </ul>
    <form action="../vue/accueil.php" method="POST">
        <input class="buttonaccueil" type="submit" value="Accéder à l'accueil">
    </form>
</body>
</html>
