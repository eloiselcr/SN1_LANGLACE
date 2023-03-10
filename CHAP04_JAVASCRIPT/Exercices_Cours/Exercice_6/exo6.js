var VariableNumerique = prompt ("Entrez un nombre", 100);

var compteur = 1
var resultat = 1

for (compteur; compteur <= VariableNumerique; compteur++){
    resultat = compteur * resultat;
}

alert("Le resulat est :" + resultat);