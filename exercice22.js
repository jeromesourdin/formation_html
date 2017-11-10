console.log("coucou");

var a = 2;
var b = 3;
var somme = a+b;

console.log(somme);
console.log(a*b);

var client = {"prenom": "Jérôme", "lunettes": false, "type": 3};
console.log(client);
console.log(client["prenom"]);
console.log(client.prenom);
var prenom=client.prenom;
console.log(prenom);
if (client.lunettes==true) 
{
	console.log("Lunettes");
}
else
{
	console.log("Pas lunettes");
}
switch (client.type)
{
	case 0:
		console.log("ceci est un prospect");
		break;
	case 1:
		console.log("ceci est un client");
		break;
	case 2:
		console.log("ceci est un bon client");
		break;
	case 3:
		console.log("ceci est un ex-client");
		break;
}

var i=0;
while(i < 2)
{
	console.log("i = "+i);
	i++;
}

var j=0;
j++;
console.log("j = "+j);
j--;
console.log("j = "+j);
console.log(j++);
console.log(j);
j+=2;
console.log("j="+j);
j-=5;
console.log("j="+j);
j*=10
console.log("j="+j);
console.log(++j);
