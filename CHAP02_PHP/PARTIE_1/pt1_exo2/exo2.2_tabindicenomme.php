<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2.2 - Les tableaux PHP a indice nomme</title>
        <!-- 
        ----------- EXO 2.2 - LES TABLEAUX PHP A INDICE NOMME -----------
        
       Creer un tableau php qui contient un nom un prenom et un mot de passe et qui a pour indice de colonne: 
       Nom, Prenom, MDP.
       Afficher ce tableau avec la commande echo Tableau[‘Nom’] ect.
    --> 
</head>
<body>

    <?php

    $tab = array (
        "Nom" => "BIENDINE",
        "Prenom" => "Francine",
        "MDP" => "louloute",
    );

    echo "Nom = [".$tab["Nom"]."] <br>; Prenom = [".$tab["Prenom"]."] <br>; MDP = [".$tab["MDP"]."]<br>";
    
    ?> 

</body>
</html>