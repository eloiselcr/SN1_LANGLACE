<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3.2 - Les tableaux PHP a double entree</title>
        <!-- 
        ----------- EXO 3.1 - LES TABLEAUX PHP A DOUBLE ENTREE -----------
        
    Creer un tableau php qui contient en indice les colonnes ‘nom’ , ‘prenom’ et
    ‘motDePass’. Remplir ce tableau avec 3 personnes. Afficher se tableau avec une boucle
    for.
    --> 
</head>
<body>

    <?php
        
    $utilisateurs = [
        ['nom' => 'Lecronier', 'prenom' => 'Eloise', 'MDP' => 'nala'],
        ['nom' => 'Carre', 'prenom' => 'Clement', 'MDP' => 'audir8'],
        ['nom' => 'Carre', 'prenom' => 'Zoe', 'MDP' => 'neige80'],
    ];

    /*
    echo '<table border="1"><tr>';
    for ($i=1; $i<=5; $i++)
    {
        echo "<th>".$array[$utilisateurs]."</th>";
    }
    echo "</tr></table>";

    */ 
    
    ?>
    
</body>
</html>