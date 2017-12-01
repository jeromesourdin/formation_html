<?php
require_once('utils/fonctions_connexion.php');
require_once('utils/variables.php');
require_once('services/user_services.php');

session_start();

$utilisateur = recupUtilisateurConnecte();

if ($utilisateur != null) {
    echo "bonjour " . $utilisateur["nom"] . "</br>";
    $identifiant = (isset($_POST['login'])) ? ($_POST['login']) : "";
    $motdepasse = (isset($_POST['motdepasse'])) ? ($_POST['motdepasse']) : "";
    $email = (isset($_POST['email'])) ? ($_POST['email']) : "";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Afficher mon formulaire
        ?>
            <form method="post" action="<?= ACCUEIL_URL ?>">
                <label >Création d'un utilisateur</label>
                <br/>
                <label for="login">Identifiant</label>
                <input type="text" name="login"/>
                <br />
                <label for="login">email</label>
                <input type="text" name="email"/>
                <br />
                <label for="motdepasse">Mot de passe</label>
                <input type="password" name="motdepasse"/>
                <br />
                <input type="submit"/>
            </form>
            <?php
    
    } else {
        // verification des informations
        $verification = creation_Utilisateur_Service($identifiant, $motdepasse, $email);
        if (is_array($verification)) {
            echo "Création d'utilisateur " . $verification["identifiant"] . " OK => <a href=" . ACCUEIL_URL . ">Retour</a><br/>";
        } else {
            echo "Erreur de création d'utilisateur : $verification => <a href=" . ACCUEIL_URL . ">Retour</a><br/>";
        }
    }
} else {
//    header('Location: form6.html');
    echo "Vous devez être connecté pour afficher cette page <br/>";
    echo "<a href='" . INDEX_URL . "'>Se connecter</a>";
}


