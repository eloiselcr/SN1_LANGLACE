<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='exo5_post.css'>
    <title>Exo 5 - Les formulaires et la methode POST</title>
            <!-- 
        ----------- EXO 5 - LES FORMULAIRES ET LA METHODE POST -----------
        
    Creer un petit formulaire avec une zone de text et un bouton. Lorsque vous cliquer sur le
    bouton la page doit afficher ce que vous avez saisie en rouge. Utilisez $_POST[‘champ1’].
    -->
</head>
<body>

<form action = "exo5_post.php" method="post">
    Texte... <input type ="text" name="champ1">
    <input type="submit" name="zioummmm">
</form>

    <?php

        if (empty($_POST['champ1'])) // si rien n'a été saisi
        {
            echo "<p>Aucun texte n'a été saisi :(</p>";
        }
        else
        {
            echo "<p id='return'>".$_POST['champ1']."</p>"; // sinon retourne le texte en rouge 
        }
        
    ?>

</body>
</html>