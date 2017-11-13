var tabEntier = [1,2,3];

console.log(tabEntier[0]);

console.log(tabEntier.length);

var somme = 0;

for (var i = 0; i < tabEntier.length; i++) {
	somme += tabEntier[i];
}

console.log(somme);

var jerome = {"enfants":["Margot","Jonas"]};

jerome.nouvelEnfant = function(prenomNouvelEnfant)
{
	this.enfants.push(prenomNouvelEnfant);
};

jerome.listEnfants = function()
{
	for (var i = 0; this.enfants.length > i; i++) {
		console.log(this.enfants[i]);
	}
};

jerome.nouvelEnfant("Thomas");
jerome.listEnfants();