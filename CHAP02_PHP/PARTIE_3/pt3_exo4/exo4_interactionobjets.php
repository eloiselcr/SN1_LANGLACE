<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4 - Interaction entre objets</title>
    <!--
        ----------- EXO 4 - INTERACTION ENTRE OBJETS -----------
        
        1) créer une méthode "attaquer" qui prend en paramétre un autre personnage.

        2) créer une méthode " défense" qui prend en paramètre une valeur d’attaque.

        3) Implémenter la méthode attaquer : elle doit appeler la méthode défense de l’objet
           personnage passé en paramètre et lui mettre 50 de dégat.

        4) Implémenter la méthode défense pour que la valeur d’attaque passée en
           paramètre décrémente la propriété vie du personnage.

        5) Rajouter des méthodes et des echos pour afficher les étapes de jeu.

        6) Instancier 2 personnage dont l’un attaque l’autre.

        7) Afficher le résultat de déroulement de l’attaque en HTML.
    -->
</head>
<body>

<?php
class Personnage4 {
    public $speudo; // Le nom du personnage
    public $vie; // La vie du personnage 

    public function __construct($speudo){ // Constructeur qui mets en place le speudo et la vie du perso
        $this->pseudo = $speudo;
        $this->vie = 100;
        }

    public function affichagepseudovie(){ // Méthode qui affiche le nom et les points de vie du personnage
        echo "Le personnage a pour pseudo " . $this->pseudo . " et possède " . $this->vie . " points de vie.";
    }

    public function affichagerapide(){ // Méthode qui affiche le nom et les points de vie du personnage rapidement
        echo $this->pseudo . " possède " . $this->vie . " points de vie.";
    }

    public function attaquer($victime){
        echo "</br> Attention ! " . $this->pseudo . " attaque " . $victime->pseudo ." ! <br>";
        $victime->defense(50);
    }

    public function defense($attaque){
        echo $this->pseudo . " se prend " . $attaque . " points de dégât.<br>";
        $this->vie = $this->vie - $attaque;
    }
} 
?>

</body>
</html>