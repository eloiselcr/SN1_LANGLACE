<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1 - Création d'une classe en PHP</title>
    <!-- 
        ----------- EXO 1 - CREATION D'UNE CLASSE EN PHP -----------

        1) Créer une classe User qui possède 2 propriétés :
            Nom et Prenom ainsi qu’une methode afficheUser qui echo « je suis un User »
        
        2) Créer 1 users dans votre page index.html puis appeler sa méthode afficheUser.
    -->
</head>
<body>
<pre> 

<?php

class User {
    private $Nom;
    private $Prenom;

    public function afficheUser(){ // Méthode qui permet d'afficher la phrase de l'User
        echo "Je suis un User";
    }
}

?>

</pre>
</body>
</html>
