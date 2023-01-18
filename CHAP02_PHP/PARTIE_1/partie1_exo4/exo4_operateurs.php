<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='exo4_operateurs.css'>
    <title>Exo 4 - Les opérateurs PHP</title>
        <!-- 
        ----------- EXO 4 - LES OPERATEURS PHP -----------
        
    Creer un petit programme php qui resout une equation du second degre de type
    Ax2 + Bx + C = 0
    Comme on ne maitrise pas pour le moment les entrees utilisateur les variables A, B et C
    seront rentre manuellement dans le programme.
    -->
</head>
<body>

<h1>Bienvenue sur le calculateur aléatoire de Delta !</h1>

    <?php

    $NombreAleatoireA = rand(1, 10); // Choisit en aléatoire un nombre entre 1 et 10 car A != 0
    $NombreAleatoireB = rand(-10, 10); // B entre -10 et 10
    $NombreAleatoireC = rand(-10, 10); // C entre -10 et 10
    $Delta; // Variable qui prendra la valeur de Delta

    echo "<p>Les nombres tirés sont :  A = ".$NombreAleatoireA.", B = ".$NombreAleatoireB." et C = ".$NombreAleatoireC.".</p>";

    $Delta = ($NombreAleatoireB) ** 2 + 4 * ($NombreAleatoireA) * ($NombreAleatoireC); // Formule du Delta : b^2-4xaxc

    echo "<p>Le delta pour ceux-ci est : ".$Delta." </p>";

    if($Delta > 0) // Si Delta est positif 
    {
        echo "<p>L'équation est <b>supérieure à 0</b>, donc elle admet <b>2 solutions</b> réelles <br>distinctes : </p>";
        $r1 = round(-($NombreAleatoireB) - sqrt($Delta) / 2 * ($NombreAleatoireA));
        $r2 = round(-($NombreAleatoireB) + sqrt($Delta) / 2 * ($NombreAleatoireA));
        echo "<p>R1, qui est égal à ".$r1." et R2, qui est égal à ".$r2.".</p>";
    }

    if($Delta == 0) // Si Delta est égal a 0
    {
        echo "<p>L'équation est <b>égale à 0</b>, donc elle admet <b>1 solution</b> réelle : </p>";
        $r0 = round(-($NombreAleatoireB) / 2 * ($NombreAleatoireA));
        echo "<p>R0, qui est égal à ".$r0."</p>";
    }

    if($Delta < 0) // Si Delta est négatif
    {
        echo "<p>L'équation est <b>inférieure à 0</b>, donc elle n'admet <b>aucune solution</b> réelle.</p>";
    }

    ?>
    
</body>
</html>