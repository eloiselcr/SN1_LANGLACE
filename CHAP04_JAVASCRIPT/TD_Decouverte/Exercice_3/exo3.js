MaDiv = document.getElementById("button");

MaDiv = addEventListener("click", affiche);

var a = 3;
var b = 2;

function multiplie(x=8){
    return x*3;
}

function affiche(evenement){
    alert("La valeur a : " + multiplie(a));
    alert("La valeur b : " + multiplie(b));
    alert("Sans aucun paramètre : " + multiplie());
}

