<?php

$chaine = "ola, c'est bientôt la fin... On a fain. Je feins d'être fatigué.\n";

echo $chaine;

echo strtoupper($chaine);
echo strtolower($chaine);
echo ucfirst($chaine);
echo addslashes($chaine);
echo strpos($chaine,",",-5);
echo substr($chaine,4);
echo trim(substr($chaine,4))."\n";
echo substr($chaine,4,22)."\n";
print_r(explode(".",$chaine));

$participants = array("Patrick","Xavier","Nicolas","Frédirique","Jérôme");
echo "\n";
echo implode(";" , $participants);
echo "\n";

$msg = "Bonjour #nom# et comment va #nom#";

echo substr_replace($msg, "Jérôme", 8, 5);
echo "\n";
echo str_replace("#nom#", "Jérôme", $msg);
echo "\n";
str_replace("#nom#", "Jérôme", $msg, $cnt);
echo "\n";
echo $cnt;
