<?php
function trancheAge($_age)
{
    return ($_age < 17) ? "mineur" :((($_age<60) && ($_age>17) ? "majeur": "senior"); 
}
function niveau($_numNiveau)
{
    return ($_numNiveau == 1) ? "débutant" : (($_numNiveau ==2) ? "intermédiare" : (($_numNiveau == 3) ? "confirmé" : "inconnue"));
}
function trigramme ($_nom)
{
    return strtoupper(substr ($_nom,0,1) . substr($_nom,strpos($_nom," ")+1,2));
}
$equipe = array (
    array ("id"=>1, "nom"=>"Nicolas Cardon", "niveau"=>2, "age"=>27),
    array ("id"=>2, "nom"=>"Jérôme Sourdin", "niveau"=>2, "age"=>18),
    array ("id"=>3, "nom"=>"Xavier Bizot", "niveau"=>1, "age"=>15),
    array ("id"=>4, "nom"=>"Felix Sportelli", "niveau"=>3, "age"=>65)
);

echo "<table>";
echo "<thead><tr><th>ID</th><th>Trigramme</th><th>niveau</th><th>age</th></tr></thead>";
echo "<tbody>";
foreach ($equipe as $personne) {
    echo "<tr>";
    foreach ($personne as $cle => $valeur) {
       switch ($cle)
       {
            case "nom" :
                $valeur = trigramme($valeur);
                break;
            case "niveau" :
                $valeur = niveau($valeur);
                break;
            case "age":
                $valeur = trancheAge($valeur);
                break;
       }
       echo "<td>$valeur</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "";
echo "</tbody>";