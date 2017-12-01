<?php
require_once('dao/user_dao.php');

function verif_identifiant_motdepasse(string $identifiant, string $motdepasse)
{
    $user = recup_utilisateur_par_identifiant($identifiant);

    // Mots de passe identiques
    if ((isset($user["password"])) &&  (strcmp($user["password"] , $motdepasse ))== 0){
        return $user;
    } else {
        return null;
    }
}

function creation_Utilisateur_Service(string $_identifiant, string $_motdepasse, string $_email)
{
    $utilisateur = array('identifiant' => $_identifiant, 'motdepasse' => $_motdepasse, 'email' =>$_email );
    
    if (strlen($_motdepasse)>3)
        return creationUtilisateur($utilisateur);
    else
        return "Mot de passe trop court !";
}