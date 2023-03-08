<?php
include 'pt3_exo1/exo1_creaclasse.php';
include 'pt3_exo2/exo2_creaconstructeur.php';
include 'pt3_exo3/exo3_creaconstructeurpara.php';
include 'pt3_exo4/exo4_interactionobjets.php';

$ipserver = "192.168.64.86";
$nomBase = "ExoPHPperso";
$loginPrivilege = "root";
$passPrivilege = "root";
$requete_perso = $my_db->query("SELECT nom, vie FROM `Personnages` WHERE id=".$id.";");
$t_perso = $requete_perso->fetch();
$this->pseudo = $t_perso['nom']; 
$this->vie = $t_perso['vie'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- 
        Index des exercices de la partie PHP de la Partie 3
    -->
</head>
<body>
<pre>

<?php


$user = new User(); // Exercice 1
echo $user->afficheUser();
echo $user->affichertableau();

?>
</br>
<?php

$perso = new Personnage2("Sephiroth"); // Exercice 2
echo $perso->vie;

?>
</br>
<?php

$perso1 = new Personnage3("Julien"); // Exercice 3
$perso1->affichagepseudovie();

?>
</br>
<?php

$perso1 = new Personnage4("Julien"); // Exercice 4
$perso1->affichagepseudovie();
echo "<br>";
$perso2 = new Personnage4("Loic");
$perso2->affichagepseudovie();
echo "<br>";

$perso1->attaquer($perso2); // Julien attaque Loic
echo "<br>";

$perso1->affichagerapide();
echo "<br>";
$perso2->affichagerapide();

?>
</br>
<?php

?>

</pre>
</body>
</html>