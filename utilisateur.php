<?php
echo "Methode appelee: " . $_SERVER['REQUEST_METHOD'];
echo "<br />";
echo "Nom = " . $_POST['nom'] . "<br />";
echo "Prenom = " . $_POST['prenom'] . "<br />";
echo "Adresse = " . $_POST['adresse'] . "<br />";
echo "Email = " . $_POST['email'] . "<br />";
echo "Telephone = " . $_POST['tel'] . "<br />";
echo "Sexe = " . $_POST['sexe'] . "<br />";
echo "Age = " . $_POST['age'] . "<br />";
echo "Rememberme = " . $_POST['rememberme'] . "<br />";
echo "Departement = " . $_POST['dpt'] . "<br />";
echo "Departements = ";
foreach ($_POST['dpts'] as $dpt) {
	echo $dpt . " ";
}
?>