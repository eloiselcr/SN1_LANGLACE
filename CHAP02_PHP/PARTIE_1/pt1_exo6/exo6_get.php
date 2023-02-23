<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='exo6_get.css'>
    <title>Exo 6 - Les formulaires et la methode GET</title>
        <!-- 
        ----------- EXO 6 - LES FORMULAIRES ET LA METHODE GET -----------
        
    Creer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur
    le bouton la page doit afficher ce que vous avez saisie en violet Utilisez $_GET [‘champ1’].
    -->
</head>
<body>

  
<form action="exo6_get.php" method="get">
Le Perroquet, qui recopie ce que tu lui dis : <input type ="text" name="champ1">
    <input type="submit" name="kofkofkof">
</form>

    <?php
    
        if (empty($_GET['champ1'])) // si rien n'a été saisi
        {
            echo "<p>Aucun texte n'a été saisi :(</p>";
        }
        else
        {
            echo "<p id='return'>".$_GET['champ1']."</p>"; // sinon retourne le texte en violet
        }

    ?>

    
</body>
</html>