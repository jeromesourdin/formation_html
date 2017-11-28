<?php
$famille = array (
    array (
        "id" => 1,
        "prenom" => "Margot",
        "nom" => "SOURDIN",
        "age" => 12,
        "sexe" => "F",
        "taille" => 1.70
    ),
    array (
        "id" => 2,
        "prenom" => "Jonas",
        "nom" => "SOURDIN",
        "sexe" => "M"        
    ),
    array (
        "id" => 3,
        "prenom" => "Jérôme",
        "nom" => "SOURDIN",
        "age" => 41,
        "sexe" => "M",
        "taille" => 1.81
    ),
    array (
        "id" => 4,
        "prenom" => "Emmanuelle",
        "nom" => "BARRE",
        "age" => 41,
        "sexe" => "F"
        )
    );

$tableau = "<table>";
$tableau .= "<thead>";

$listeCles = array ();
foreach ($famille as $personne)
{   
    foreach ($personne as $cle => $valeur) {
        
        $found = false;
        foreach ($listeCles as $key) 
            if ($key == $cle) 
                $found = true;
        
        if (!$found){
            array_push($listeCles,$cle);
            $tableau .= "<th>$cle</th>";
        }
    }
}
$tableau .= "</thead>";

$tableau .= "<tbody>";
foreach ($famille as $personne)
{   
    $tableau .= "<tr>";
    foreach ($personne as $cle => $valeur) {
        
        $found = false;
        foreach ($listeCles as $key) 
            if ($key == $cle) 
                $found = true;
        
        if (!$found)
            array_push($listeCles,$cle);
        
        if ($cle == "sexe")
            $valeur = ($valeur == "F") ? "Femme" : (($valeur == "M") ? "Homme" : "Inconnu");
        if ($found)
            $tableau .= "<td>" . $valeur . "</td>";
        else
            $tableau .= "<td></td>";
    }
    $tableau .= "</tr>";
}
$tableau .= "</tbody>";

// $tableau .= "<thead><tr>";
// foreach ($listeCles as $key => $value) {
//     $tableau .= "<th>$value</th>";
// }
// $tableau .= "</tr></thead>";



echo $tableau;

echo "</table>";

