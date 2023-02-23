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

    $GLOBALS["pdo"] = new PDO ('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    class Personnage5 {
        public $id; // L'id du personnage
        public $speudo; // Le nom du personnage
        public $vie; // La vie du personnage 
    
        public function __construct($speudo){ // Constructeur qui mets en place le speudo et la vie du perso
            $this->pseudo = $speudo;
            $this->vie = 100;
            }

        }

?>

</body>
</html>