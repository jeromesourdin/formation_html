<?php

function afficheUtilisateurs($_utilisateurs)
{
    echo "les utilisateurs sont : <ul>";
    foreach ($_utilisateurs as $value) 
        echo "<li>$value</li> ";
    echo "</ul>";
}

function ajouterUtilisateurs(&$_utilisateurs, $_nom)
{
    array_push($_utilisateurs,$_nom);
    afficheUtilisateurs($_utilisateurs);
}

function ajouterUtilisateur2($_utilisateurs, $_nom)
{
    array_push($_utilisateurs,$_nom);
    return $_utilisateurs;
}

function calculTotalUtilisateurs($_utilisateurs,&$_totalUtilisateurs)
{
    $_totalUtilisateurs = count($_utilisateurs);
}

function sommeOptionnelle($_a = 0,$_b = 0)
{
    echo "<br/>" . ($_a + $_b);
}

$utilisateurs = array("jerome","manu","margot","jonas");

afficheUtilisateurs($utilisateurs);
ajouterUtilisateurs($utilisateurs,"morice");
$utilisateurs = ajouterUtilisateur2($utilisateurs,"jaky");
afficheUtilisateurs($utilisateurs);

$totalUtilisateurs = 0;
calculTotalUtilisateurs($utilisateurs , $totalUtilisateurs);
echo $totalUtilisateurs;

sommeOptionnelle(1,2);
sommeOptionnelle(12);
sommeOptionnelle();