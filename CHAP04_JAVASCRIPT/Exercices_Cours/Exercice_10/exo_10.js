var compteur = 0;
var compteur2 = 0;

var MaDiv = document.getElementById("Methode2");
MaDiv.addEventListener("click", UneProcedureQuiChangeLeTexte);

var MaDiv = document.getElementById("Methode3");
MaDiv.addEventListener("mouseover", UneProcedureQuiSurvole);

var MaDiv = document.getElementById("Methode4");
MaDiv.addEventListener("keydown", UneProcedureQuiEcrit);



function UneProcedureQuiChangeLeTexte(evenement) { // Changement texte
    compteur++;
    evenement.target.innerHTML = "On m'a cliqué dessus "+compteur+" fois !";
}

function UneProcedureQuiSurvole(evenement) { // Survol
    compteur2++;
    evenement.target.innerHTML = "On m'a survolé "+compteur2+" fois !";
}

function UneProcedureQuiEcrit(evenement) { // Ecriture
    evenement.target.innerHTML = "On a appuyé sur : "+evenement.key;
}



var MaDiv2 = document.getElementById("Methode5"); // Méthode5 pour modifier la couleur de la div
MaDiv2.addEventListener("click", modify_couleurdiv);

function modify_couleurdiv(evenement) {
    if (evenement.target.className == "classblue") 
    {
        evenement.target.className = "classred";
    } 
    else 
    {
        evenement.target.className = "classblue";
    }
}

var MaDiv3 = document.getElementById("Methode6"); // Méthode6 pour modifier la visibilité
MaDiv3.addEventListener("mouseover", modify_visibilite);

function modify_visibilite(evenement) 
{
    var div = document.getElementById("maDiv3");
    div.style.display = "none";
}





