<?php 
session_start(); 
define('truelogin', 'Julien'); // on définit le truelogin
define('truepassword', '1234'); // on définit le truepassword
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Final</title>
        <!-- 
        ----------- EXO 8 - EXERCICE FINAL -----------
        
    Creer une appli web avec un bouton de connexion qui demande un login et un mot de
    passe. Comparer la valeur saisie avec le mdp et le login qui sera dans le code « Julien »
    « 1234 »
    - Si le login n’est pas bon afficher toujours le formulaire avec le message le login est
    inconnu.
    - Si le mdp n’est pas bon afficher toujours le formulaire avec le message le mot de pass
    est incorrect.
    - Si le login et le mdp sont ok affichez un message de bienvenue et cachez le formulaire.
    Puis affichez un bouton de déconnexion. Faites en sorte qu’une fois connecté l’utilisateur
    le reste lorsque on actualise la page.
    Lorsque l’on clique sur le bouton de déconnexion la session doit être détruite.
    -->
</head>
<body>

<h1>Bienvenue sur votre page de connexion !</h1>

<form action = "exo_final.php" method="post">  <!-- Utilisation de la méthode POST -->
    Saisissez le login : <input type ="text" name="login" id='login'><br><br><!-- Mise en place du champ LOGIN -->
    Saisissez le mot de passe : <input type ="text" name="password" id='password'><br><br><!-- Mise en place du champ PASSWORD -->
    <input type="submit" name="envoyer"> <!-- Bouton Envoyer -->
</form>

<?php 

if(!empty($_POST)) // Si POST n'est pas vide
{
    if(!empty($_POST['login']) && !empty($_POST['password'])) // Si les champs LOGIN et PASSWORD ne sont pas vides
    {
        // 1° ON VERIFIE DANS UN PREMIER TEMPS SI IL Y A DES ERREURS 

        if($_POST['login'] !== truelogin) // Si le login n'est pas égal au truelogin définit 
        {
            echo '<p>Login incorrect !<p>'; // Affichage de l'erreur de login
        }
        elseif($_POST['password'] !== truepassword) // Si le password n'est pas égal au truepassword définit
        {
            echo '<p>Mot de passe incorrect !<p>'; // Affichage de l'erreur de password
        }

        // 2° SI TOUT EST CORRECT, ALORS ON SE CONNECTE 

        else // si l'ID et le password sont corrects
        {
            // on démarre la session
            echo '<p>Bienvenue !<p>';
            $_SESSION['trueconnect']=true;
        }
    }
    else // Si aucun texte n'a été saisi dans les champs 
    {
        echo '<p>Les champs sont obligatoires !<p>'; 
    }
}

if (isset($_SESSION['trueconnect']) && $_SESSION['trueconnect']==true){ // Si la session trueconnect est validée (que la connexion est ok)
    echo "Vous êtes connecté ! Bonjour Julien."; // Mot de bienvenue 
    echo '<input type="submit" name="logout" value="Déconnexion">';
}

?> 

</body>
</html>