<?php


function connectionDB()
{
    $hostDB = "localhost";
    $userDB = "formation";
    $passDB = "formation";
    $nameDB = "formation";
    $charset = "UTF-8";
       
    $dsn = "mysql:host=$hostDB;dbname=$nameDB";
    $pdo = new PDO($dsn, $userDB, $passDB);
    return $pdo;
}

function creationUtilisateur($_utilisateur)
{
    $sql = "INSERT INTO utilisateurs (u_identifiant, u_motdepasse,u_email) VALUES (:identifiant,:motdepasse,:email)";
    $stmt = connectionDB()->prepare($sql);
    $stmt->execute(["email" => $_utilisateur["email"],"motdepasse" => $_utilisateur["motdepasse"],"identifiant" => $_utilisateur["identifiant"]]);
}

function recuperationUtilisateur($_email)
{
    $sql = "SELECT * FROM utilisateurs WHERE u_email ='" . $_email . "'";
    
    $stmt = connectionDB()->query($sql);
    $utilisateur = array();

    while ( $ligne = $stmt->fetch())
    {
        $utilisateur["identifiant"] = $ligne["u_identifiant"];
        $utilisateur["email"] = $ligne["u_email"];
        $utilisateur["id"] = $ligne["u_id"];
    }
    return $utilisateur;
}

function miseAJourUtilisateur($_identifiant,$_email)
{
    $sql = "UPDATE utilisateurs SET u_identifiant = :identifiant WHERE u_email = :email";
    
    $stmt = connectionDB()->prepare($sql);
    $stmt->execute(["email" => $_email,"identifiant" => $_identifiant]);
}

function supprimerUtilisateur($_identifiant)
{
    $sql = "DELETE FROM utilisateurs WHERE u_identifiant = :identifiant";
    
    $stmt = connectionDB()->prepare($sql);
    $stmt->execute(["identifiant" => $_identifiant]);
}

$utilisateurEmail = "jerome@chuletas.fr";
$utilisateur = array (
    "identifiant" => "sourdijo",
    "email" => "jonas@chuletas.fr",
    "motdepasse" => "160210"
);

//creationUtilisateur($utilisateur);
$utilisateurRetour = recuperationUtilisateur($utilisateurEmail);
print_r($utilisateurRetour);
echo $utilisateurRetour["identifiant"];
echo $utilisateurRetour["email"];
miseAJourUtilisateur(strtoupper($utilisateurRetour["identifiant"]),$utilisateurRetour["email"]);
supprimerUtilisateur($utilisateur['identifiant']);