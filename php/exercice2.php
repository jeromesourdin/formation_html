<?php
$tabEntier = array(10,11,12);

foreach ($tabEntier as $tab)
    echo $tab . "<br>";
print_r($tabEntier);
echo "</br>";
var_dump($tabEntier);
echo "</br>";
echo "</br>";

$tabMixte = array("Jerome",1.81,41);

foreach ($tabMixte as $tab)
    echo $tab . "<br>";
    
print_r($tabMixte);
echo "</br>";
var_dump($tabMixte);
echo "</br>";
echo "</br>";

for ($i=0; $i < count($tabMixte) ; $i++) { 
    echo $tabMixte [$i] . "</br>";
}
