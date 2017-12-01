<?php

$user=(isset($_POST)) ? $_POST : "";

if (isset($user["login"]) 
    && isset($user["password"]) 
    && $user["login"] == "jerome@chuletas.fr" 
    && $user["password"] == "toto22")
    {    
        echo "bonjour " . $user["login"];
    }
else
    echo "Erreur de saisie <br/> <a href=formulaire3.html>Conectez vous</a>";