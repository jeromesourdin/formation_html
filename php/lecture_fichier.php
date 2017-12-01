<?php

$fichier = "ressources/monfichier.txt";

echo "get_file_contents : <br/>";

$contenu = file_get_contents($fichier);
echo $contenu;
echo "<br/><br/>";
// affichage ligne par ligne

echo "fopen + fget : <br/>";
$inputFile = fopen($fichier,"r");
if ($inputFile){
    while (($ligne = fgets($inputFile)) != false) {
        echo $ligne . "<br/>";
    }
}
fclose($inputFile);
