MaDiv = document.getElementById("button");

MaDiv = addEventListener("click", CalculAire);

function CalculAire(evenement){
    var long = window.prompt("Saisir la longueur de votre cercle : ");
    var perim = 2*Math.PI*long; // Calcul du périmètre
    var aire = Math.PI*Math.pow(long, 2); // Calcul de l'aire

    alert(" Son perimètre est de : " + perim + " et l'aire est de : " + aire);
}