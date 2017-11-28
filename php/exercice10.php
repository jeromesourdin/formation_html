<?php
$apprenants = ["Frederique","Jerome","Nicolas","Xavier","Patrick"];

echo "Les apprenants sont : ";
echo "<ul>";
$i=0;
do
{
echo "<li>".$apprenants[$i]."</li>";
}
while ($i++ < count($apprenants)-1);
echo "</ul>";
