MaDiv = document.getElementById("button");

MaDiv = addEventListener("click", affiche);

var tableau = [-2, 1, 4];

function addition_tab(x){
    return  x+2;
}

function affiche(evenement){
    for(var compteur=0; compteur < tableau.length; compteur++){
        alert("Resultat de l'addition +2 pour chaque valeur du tableau est de : " + addition_tab([compteur]));
    }
}