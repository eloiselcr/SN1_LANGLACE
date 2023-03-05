// alert("mr rapidecho meilleur youtubeur");

// var toto = "titi";
// alert ("toto");

/* 

// chaine de caracteres
var VariableString = "toto";

// nombre
var VariableNumerique = 200;

// tableaux 
var VariableTableaux = ['Llama', 'Fashion'];

// objets
var VariableObjets = window;

alert (VariableString + VariableNumerique + VariableTableaux[0] + VariableObjets.location.pathname);


var VariableString = "toto";

var VariableNumerique = prompt ("Entrez un nombre", 100);

if (VariableString == "toto" && VariableNumerique !=200 || VariableNumerique <=100){
    alert("Je suis dans le cas 1");
}
else{
    alert("Je suis dans le cas 2");
}

var largeur = window;

if (largeur.innerWidth < 300)
{
    alert("La fenêtre est inférieure");
}

*/

var VariableNumerique = prompt ("Entrez un nombre", 100);

var compteur = 1
var resultat = 1

for (compteur; compteur <= VariableNumerique; compteur++){
    resultat = compteur * resultat;
}

alert("Le resulat est :" + resultat);