<?php
$valeur = array('10', '15', '20', '30' );

for ($i=0; $i < count($valeur) ; $i++) { 
   echo $valeur[$i] . "<br/>";
}

$utilisateur = array();
$utilisateur["nom"] = "SOURDIN";
$utilisateur["premon"] = "Jérôme";

foreach ($utilisateur as $key => $value) {
    echo "Clé = " . $key . " - ";
    echo "Valeur = " . $value . "<br/>";
}

$inscrits = array("jerome","manu","jonas","margot");

echo "Inscrits : ";
foreach ($inscrits as $inscrit) {
    echo "$inscrit - ";
}