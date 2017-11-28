<?php
$pere = array (
                "id" => 1,
                "nom" => "SOURDIN",
                "prenom" => "Jérôme",
                "taille" => 1.81
             );

//var_dump($pere);
//echo "</br>";
//echo "</br>";

$mere = array (
    "id" => 2,
    "nom" => "BARRE",
    "prenom" => "Emmanuelle",
    "taille" => 1.66
 );

 //var_dump($mere);
 //echo "</br>";
 //echo "</br>";
 
$enfants = array (
    array (
        "id" => 3,
        "nom" => "SOURDIN",
        "prenom" => "Margot",
        "taille" => 1.70
    ),
    array (
        "id" => 4,
        "nom" => "SOURDIN",
        "prenom" => "Jonas",
        "taille" => 1.30
    )
);

// var_dump($enfants);
// echo "</br>";
// echo "</br>";

$famille = array (
    "pere" => $pere,
    "mere" => $mere,
    "enfants" => $enfants
);
echo "</br>";

$famille["nbEnfants"] = count($famille["enfants"]);
$nbEnfant = $famille["nbEnfants"];

echo "</br>";
echo "Nombre d'enfants : " . $nbEnfant;
echo "</br>";
echo "Prenom du dernier enfant : " . $famille["enfants"][$nbEnfant -1]["prenom"];
echo "</br>";


echo "<PRE>";
var_dump($famille);
echo "</PRE>";


