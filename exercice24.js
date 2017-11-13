// Définir une variable voitureFelix
// qui a pour proprietes : 
// - marque
// - model
// - motorisation
// - etat (arret, avance, recul)
// et qui a methodes
// - getDescription() 
// qui renvoie marque+model+motorization+etat
// - avancer() qui passe l'etat a avance
// - arreter()
// - reculer()
var voitureFelix = {"marque":"dacia", "model":"duster","motorisation":"2.1 TDi","etat":""};

voitureFelix.getDescription = function() 
{
	switch (this.etat)
	{
		case "arreter":
			var finDesc = "est arreté";
			break;
		case "avancer":
			var finDesc = "avance";
			break;
		case "reculer":
			var finDesc = "recule";
			break;
	}
	return "C'est un " + this.model + " " + this.marque + " (" + this.motorisation + ") qui " + finDesc;	
}

voitureFelix.avancer = function()
{
	this.etat = "avancer";
}

voitureFelix.reculer = function()
{
	this.etat = "reculer";
}

voitureFelix.arreter = function()
{
	this.etat = "arreter";
}

voitureFelix.avancer();
console.log(voitureFelix.getDescription());
voitureFelix.arreter();
console.log(voitureFelix.getDescription());
voitureFelix.reculer();
console.log(voitureFelix.getDescription());
voitureFelix.arreter();
console.log(voitureFelix.getDescription());
