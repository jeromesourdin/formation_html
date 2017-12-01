<?php

print_r ($_POST);
$utilisateur = array (
    "id" => 1,
    "nom" => $_POST["nom"],
    "prenom" => $_POST["prenom"]
    
);
echo "<br/>";
echo "<br/>";
var_dump($utilisateur);

header('Content-Type: application/json');
echo json_encode($utilisateur);