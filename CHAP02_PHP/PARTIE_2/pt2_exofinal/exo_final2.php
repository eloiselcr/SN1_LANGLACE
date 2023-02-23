<?php
session_start(); 
define('truepassword', 'rapidecho');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Final 2</title>
        <!-- 
        ----------- EXERCICE FINAL 2 -----------
        
        Ecrire une fonction qui affiche un formulaire de connexion à une page et qui prend en
        paramètre un mot de pass
        Cette fonction vérifie que le mot de pass saisie dans le formulaire est le même que celui
        passé en paramètre avec la méthode POST
        Appeler cette fonction dans votre code puis :
            si elle retourne ok afficher que vous avez le bon mot de pass et afficher un lien
        secret vers une page secret.
            sinon afficher que le mot de pass n’est pas bon et ré-appeler la fonction
    --> 
</head>
<body>
   
<h1>Bienvenue sur votre page de connexion !</h1>

<?php 

function connexion($password) // Fonction CONNEXION qui verifie si le password rentré correspond au truepassword
{
    if ($password !== truepassword) // Si le password n'est pas correct
    {
        echo '<p>Mot de passe incorrect !</p>';
        return false;
    }
    return true; // Le password correspond, la fonction retourne TRUE
}

function afficher_formulaire() 
{
    echo '<form action="exo_final2.php" method="post">';
    echo 'Saisissez le mot de passe : <input type="password" name="password" id="password"><br><br>';
    echo '<input type="submit" name="envoyer">';
    echo '</form>';
}

if(!empty($_POST)) // Si l'utilisateur a ecrit quelque chose
{
    if(!empty($_POST['password'])) // Si l'utilisateur a rempli le champ password
    {
        if (connexion($_POST['password'])) // Si fonction connexion = TRUE via password
        {
            $_SESSION['trueconnect'] = true; // La SESSION est activée
            echo '<p>Bienvenue !</p>';
        }
    } 
    else 
    {
        echo '<p>Le champ est obligatoire !</p>'; // Si l'utilisateur n'a pas rempli le champ 
    }
}

if (isset($_SESSION['trueconnect']) && $_SESSION['trueconnect'] == true) // SI L'UTILISATEUR EST CONNECTE
{
    echo "Vous êtes connecté ! <br><br>"; // !!!! RAJOUTER LE HREF!!!
    echo "<a href = 'https://youtu.be/dQw4w9WgXcQ'>Lien secret ;) <br><br></a>";


    echo '<form action="exo_final2.php" method="post">';
    echo '<input type="submit" name="deconnexion" value="Déconnexion">'; // Bouton pour la deconnexion
    echo '</form>';

    if(isset($_POST['deconnexion'])) // SESSION DESTROY pour la Deconnexion
    {
        session_destroy();
        header('Location: exo_final2.php');
    }
} 
else // SI L'UTILISATEUR N'EST PAS CONNECTE
{
    afficher_formulaire(); // On affiche le formulaire
}

?>

</body>
</html>



