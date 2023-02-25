<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5 - Objet PDO select</title>
    <!-- 
        ----------- EXO 5  - INTERACTION ENTRE OBJETS -----------

        1) Créer en BDD une table personnage avec les propriétés de la classe personnage.
           (Pensez toujours à rajouter un champ id)

        2) Créer plusieurs Personnagess avec phpMyadmin dans votre Table.

        3) Modifier votre constructeur de Classe pour avoir en paramètre un id.

        4) Dans votre classe Personnage instancier un objet PDO dans la méthode
           constructeur puis faites un select * from personnage where id = id.
           (je vous conseille de mettre l’objet PDO dans une propriété de votre classe)

        5) Initialiser les propriétés de votre Classe Personnage avec les données récupéré de
           la requête BDD.

        6) Instancier un Personnage et afficher ses informations. Exemple : $P1 = new
           Personnage(12)  $P1->AfficherPersonnage();
    -->
</head>
<body>
    
<?php

    $ipserver = "192.168.64.86";
    $nomBase = "ExoPHPperso";
    $loginPrivilege = "root";
    $passPrivilege = "root";
    $requete_perso = $my_db->query("SELECT nom, vie FROM `Personnages` WHERE id=".$id.";");
    $t_perso = $requete_perso->fetch();
    $this->pseudo = $t_perso['nom']; 
    $this->vie = $t_perso['vie'];

    $GLOBALS["pdo"] = new PDO ('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    class Personnage5 {
        public $id; // L'id du personnage
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
        
            public function attaquer($victime){ // Méthode attaquer qui set la valeur de damage prit par la victime
                echo "</br> Attention ! " . $this->pseudo . " attaque " . $victime->pseudo ." ! <br>";
                $victime->defense(50);
            }
        
            public function defense($attaque){ // Méthode défense qui inflige les dégâts de la méthode attaquer à la victime
                echo $this->pseudo . " se prend " . $attaque . " points de dégât.<br>";
                $this->vie = $this->vie - $attaque;
            }

    }

?>

</body>
</html>