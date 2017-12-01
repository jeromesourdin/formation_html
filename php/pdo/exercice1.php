<?php
$hostDB = "localhost";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "UTF-8";

$dsn = "mysql:host=$hostDB;dbname=$nameDB";

$pdo = new PDO($dsn, $userDB, $passDB);

$sql = "SELECT u_id,u_identifiant as identifiant,u_motdepasse,u_email FROM utilisateurs";

$stmt = $pdo->query($sql);

while ( $ligne = $stmt->fetch())
{
    //print_r($ligne);
    echo $ligne['identifiant'] . "<br/>";
}
