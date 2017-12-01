<?php

$hostDB = "localhost";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "UTF-8";


$utilisateur = array (
    "identifiant" => "sourdima",
    "email" => "margot@chuletas.fr",
    "motdepasse" => "250505"
);

$dsn = "mysql:host=$hostDB;dbname=$nameDB";
$pdo = new PDO($dsn, $userDB, $passDB);

$sql = "INSERT INTO utilisateurs (u_identifiant, u_motdepasse,u_email) VALUES (:identifiant,:motdepasse,:email)";

$stmt = $pdo->prepare($sql);
$stmt->execute(["email" => $utilisateur["email"],"motdepasse" => $utilisateur["motdepasse"],"identifiant" => $utilisateur["identifiant"]]);

