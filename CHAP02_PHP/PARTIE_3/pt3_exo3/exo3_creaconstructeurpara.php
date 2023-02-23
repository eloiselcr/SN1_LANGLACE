<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3 - Création d'un constructeur avec des paramètres</title>
    <!--
        ----------- EXO 3 - CREATION D'UN CONSTRUCTEUR AVEC DES PARAMETRES -----------

        1) Reprendre la classe Personnage et implémenter le constructeur pour qu’il
           initialise la propriété vie à 100 et initialise la propriété speudo avec la valeur
           passée en paramètre.

        2) Créer un personnage. Exemple : personage1 = new personnage("Julien");

        3) Ajouter une méthode dans votre classe pour afficher le nombre de point de vie du
           personnage ainsi que son pseudo.
    -->
</head>
<body>
<pre>

<?php

class Personnage3 {
    public $speudo;
    public $vie;

    public function __construct($speudo){ // Constructeur qui mets en place le speudo et la vie du perso
        $this->pseudo = $speudo;
        $this->vie = 100;
        }

    public function affichagepseudovie(){ // Fonction qui affiche le nom et les points de vie du personnage
        echo "Le personnage a pour pseudo " . $this->speudo . " et possède " . $this->vie . " points de vie.";
    }
}

?>

</pre>  
</body>
</html>