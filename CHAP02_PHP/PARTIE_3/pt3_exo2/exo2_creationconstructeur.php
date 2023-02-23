<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2 - Création d'un constructeur</title>
    <!--
        ----------- EXO 2 - CREATION D'UN CONSTRUCTEUR -----------
        
        1) Créer une classe Personnage qui possède 2 propriétés : Speudo et Vie ainsi qu’un
           constructeur vide : public function __construct(){}

        2) Implémenter le constructeur pour qu’il initialise la propriétés vie à 100.
    -->
</head>
<body>
<pre>

<?php

class Personnage2 {
    private $speudo;
    public $vie;

    public function __construct() { // Constructeur qui mets en place le speudo et la vie du perso
        $this->vie = 100;
    }
}

?>

</pre>
</body>
</html>