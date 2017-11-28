<?php
$nomMarital = null;
$nomJeuneFille = null;
$nomDefaut = "titi";


$nom = ($nomJeuneFille) ? $nomJeuneFille : $nomDefaut;
$nom = ($nomMarital) ? $nomMarital : $nom;

//echo $nom;
echo "<br />";

$nom = $nomMarital ?? $nomJeuneFille ?? $nomDefaut ?? "pas de valeur";

echo $nom;