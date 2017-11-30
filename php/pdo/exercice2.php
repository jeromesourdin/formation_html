<?php
$hostDB = "localhost";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "UTF-8";

$dsn = "mysql:host=$hostDB;dbname=$nameDB";

$pdo = new PDO($dsn, $userDB, $passDB);

$email = "jerome@chuletas.fr";

$sql = "SELECT u_id,u_identifiant as identifiant,u_motdepasse,u_email FROM utilisateurs WHERE u_email = :email";

$stmt = $pdo->prepare($sql);
$stmt->execute(["email" => $email]);

while ( $ligne = $stmt->fetch())
{
    //print_r($ligne);
    echo $ligne['identifiant'] . "<br/>";
}
