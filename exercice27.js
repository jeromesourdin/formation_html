var message ='{"nom":"jerome"}';

console.log(message);
console.log(message.nom);

var utilisateur=JSON.parse(message);
console.log(utilisateur);
console.log(utilisateur.nom);

utilisateur.age = 41;
console.log(utilisateur);

messageAEnvoyer = JSON.stringify(utilisateur);
console.log(messageAEnvoyer)