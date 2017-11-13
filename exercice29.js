var mesP = document.querySelectorAll("p");
console.log(mesP);

var firstChild = document.querySelector("#p1").firstChild;
console.log("Premier Enfant : " + firstChild.nodeName);

document.querySelector("#bouton").onclick = function ()
{
	var monP = document.querySelector ("#p1");
	monP.textContent = "t'es cuit !";

	var mesPPair = document.querySelectorAll("p.pair");
	for (var i = 0; mesPPair.length > i; i++) {
		mesPPair[i].style.display = "none";
	}

	 document.querySelector("img").className = "hidden";
};



//
