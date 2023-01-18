<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7 - Les varibles de session</title>
        <!-- 
        ----------- EXO 7 - LES VARIABLES DE SESSION -----------
        
    Creer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur
    le bouton la page doit afficher ce que vous avez saisie et l’enregistre dans une variable de
    session $_SESSION[]. Le but est que si vous actualisez votre page la variable est
    memorisee et le site affiche toujours la valeur saisie.
    -->
</head>
<body>

<form action = "exo7_varisessions.php" method="post">
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
            if (empty($_SESSION['save']))
            {
                $_SESSION['save'] = $_POST['champ1'];
                echo "<p id='return'>".$_POST['champ1']."</p>"; // sinon retourne le texte
                echo "<p>La variable enregistrée est donc : ".$_SESSION['save']."</p>";
                
            }
            else 
            {
              echo "<p> Une variable de session n'a pas encore ou a déjà été déclarée.<p>"  ;
            }
        }

    ?>
    
</body>
</html>