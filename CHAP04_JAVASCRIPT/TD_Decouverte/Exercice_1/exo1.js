MaDiv = document.getElementById("button");

MaDiv = addEventListener("click", CalculPerim);

function CalculPerim(evenement){
    var long = window.prompt("Saisir une longueur : ");
    var larg = window.prompt("Saisir une largeur : ");
    var aire = long*larg;
    var perimetre = long*2 + larg*2;
    alert("L'aire est de : " + aire + " et son perimètre est : " + perimetre);
}