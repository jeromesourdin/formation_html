console.log("coucou");

function mafunction(variable)
{
	console.log(variable);
}

mafunction("c'est moi");

// Classe Objet Methode

var jerome = { "prenom": "Jérôme", "nom": "SOURDIN", "age": "41"};

jerome.affichePrenom = function( test )
{
	if (test)
	{
		console.log("le prenom est : " + this.prenom.toUpperCase());
	}
	else
	{
		console.log("le prenom est : " + this.prenom.toLowerCase());
	}
}
jerome.afficheNom = function()
{
	console.log("le nom est : " + this.nom);
}

jerome.isMajeur = function()
{
		return (this.age > 18)? true:false;
}

jerome.affichePrenom(true);
jerome.afficheNom();

if (jerome.isMajeur())
{
	console.log("PASSE");
}
else
{
	console.log("PASSE PAS");
}
