<?php

$xml = simplexml_load_file("ressources/fichier.xml");

print_r($xml->person->first_name);
echo "<br/>";
foreach ($xml->children() as $person) {
    foreach ($person->attributes() as $key => $value) {
        echo "il y a $key valeur $value<br/>";
    }
    foreach ($person->children() as $key => $value) {
        echo "il y a $key valeur $value<br/>";
    }
}