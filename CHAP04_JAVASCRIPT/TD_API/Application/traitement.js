
// EXERCICE 3 

function mafonction(){

    alert("Démarrage de l'API"); // Alerte du lancement de l'API

    setInterval(function (){ // EXERCICE 4, Interval fixé à 2sec

    fetch('API_traitement.php').then((resp) => resp.json()).then(
    // data est la réponse http de notre API
    function (respJson){ // DOM
    console.log(respJson);
    update("arenne", respJson);
    }
    )
    
    .catch(function(error) {
    // This is where you run code if the server returns any errors
    console.log(error);
    });
    }, 2000);
   }



function update(id, texte){ // Fonction Update prenant en paramètre un id (de la div) + le texte contenu (innerHTML)
    var up = document.getElementById(id).innerHTML = texte;
}

var bouton = document.querySelector("#boutton");
bouton.addEventListener("click", mafonction);




