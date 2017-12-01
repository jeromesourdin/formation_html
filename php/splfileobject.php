<?php

$fichier = "ressources/monfichier.txt";
$file = new SplFileObject($fichier, "r");
foreach ($file as $line) {
    echo "$line <br/>";
}

$ligneAEcrire = "Nouvelle Ligne\n";
$file = new SplFileObject($fichier, "a");
$file->fwrite($ligneAEcrire);

$fichier = "ressources/monfichier.txt";
$file = new SplFileObject($fichier, "r");
foreach ($file as $line) {
    echo "$line <br/>";
}

echo "<br/><br/>";
$fichierCSV = "ressources/fichier.csv";
$file = new SplFileObject($fichierCSV,"r");
$file -> setFlags(SplFileObject::READ_CSV);
$file -> setCsvControl(";",'"','"');

foreach ($file as $line) {
    print_r($line);
    echo "<br/>";
}