<?php

$description = (isset($_POST['texte'])) ? $_POST['texte'] : "";

header('Content-Type: application/json');

if ($description != "")
{
    $user = json_decode($description);
    print_r($user);
    print_r(json_encode($user));
}
