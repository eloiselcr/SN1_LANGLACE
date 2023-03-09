// Modification d'une div
function modify(texte){ 

    var UneDiv = document.getElementById("CoucouDiv");
    UneDiv.innerHTML = texte;   
}
modify("hello"); // changement du texte possible


// Modification de plusieurs divs
function multiple_modify(){ 

    var PlusDivs = document.getElementsByName("MultipleDivs");
    //PlusDivs;  
    PlusDivs.forEach(function(item) {
        item.innerHTML = "hello_multiple";
     });
}