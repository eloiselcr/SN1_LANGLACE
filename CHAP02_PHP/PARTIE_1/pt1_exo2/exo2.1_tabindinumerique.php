<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2.1 - Les tableaux PHP a indice numerique</title>
        <!-- 
        ----------- EXO 2.1 - LES TABLEAUX PHP A INDICE NUMERIQUE -----------
        
       A) Creer un tableau php qui contient 5 chiffres.
            Afficher les 5 chiffres a la suite grace au parcours du tableau dans une boucle for.
       B) Essayer d afficher ses 5 chiffres dans un tableau HTML que genere PHP
    --> 
</head>
<body>
    
    <?php

    $array=[
        1=>8,
        2=>10,
        3=>64,
        4=>9,
        5=>21,
    ];

    echo '<table border="1"><tr>';
    
    for ($i=1; $i<=5; $i++)
    {
        echo "<th>".$array[$i]."</th>";
    }
    echo "</tr></table>";

    ?>
    
</body>
</html>