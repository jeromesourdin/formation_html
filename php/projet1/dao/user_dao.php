<?php

function recup_utilisateur_par_identifiant($_identifiant)
{
    $sql = "SELECT u_identifiant,u_email,u_id,u_motdepasse FROM utilisateurs WHERE u_identifiant ='" . $_identifiant . "'";
    
    $stmt = connectionDB()->query($sql);
    $utilisateur = array();

    while ( $ligne = $stmt->fetch())
    {
        $utilisateur["identifiant"] = $ligne["u_identifiant"];
        $utilisateur["nom"] = $ligne["u_identifiant"];
        $utilisateur["email"] = $ligne["u_email"];
        $utilisateur["password"] = $ligne["u_motdepasse"];
        $utilisateur["id"] = $ligne["u_id"];
    }
    return $utilisateur;
}
// function recup_utilisateur_par_identifiant($identifiant)
// {
//     $user = array("id" => 4 , 
//                     "identifiant" => $identifiant, 
//                     "nom" => "sportelli" , 
//                     "password" => "abc");
//     return $user;
// }


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
    $pdo = connectionDB();
    $stmt = $pdo->prepare($sql);
    
    $code = false;
    try {
        $pdo->beginTransaction();
        $code = $stmt->execute(["email" => $_utilisateur["email"],"motdepasse" => $_utilisateur["motdepasse"],"identifiant" => $_utilisateur["identifiant"]]);
        $pdo->commit();
    }
    catch (Execption $e)
    {
        $pdo->rollback();
    }

    if ($code)
        return recuperationUtilisateur($_utilisateur['identifiant']);
    else
        return $code;
}

function recuperationUtilisateur($_identifiant)
{
    $sql = "SELECT * FROM utilisateurs WHERE u_identifiant ='" . $_identifiant . "'";
    
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
    
    $pdo = connectionDB();
    $stmt = $pdo->prepare($sql);

    $code = false;
    try {
        $pdo->beginTransaction();
        $code=$stmt->execute(["email" => $_email,"identifiant" => $_identifiant]);
        $pdo->commit();
    }
    catch (Execption $e)
    {
        $pdo->rollback();
    }

    if ($code)
        return recuperationUtilisateur($_utilisateur['identifiant']);
    else
        return $code;
}

function supprimerUtilisateur($_identifiant)
{
    $sql = "DELETE FROM utilisateurs WHERE u_identifiant = :identifiant";
    
    $pdo = connectionDB();
    $stmt = $pdo->prepare($sql);

    $code = false;
    try {
        $pdo->beginTransaction();
        $code=$stmt->execute(["identifiant" => $_identifiant]);
        $pdo->commit();
    }
    catch (Execption $e)
    {
        $pdo->rollback();
    }

    if ($code)
        return recuperationUtilisateur($_utilisateur['identifiant']);
    else
        return $code;
}


