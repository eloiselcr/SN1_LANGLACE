<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICATION PHP BDD - CONSULTATION</title>
</head>
<body>

<h1> Bienvenue sur votre page AcessMedical </h1>

<?php

try {
    $ipserver = "192.168.64.86";
    $nomBase = "medecin";
    $loginPrivilege = "root";
    $passPrivilege = "root";

    $GLOBALS["pdo"] = new PDO ('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    $requete = "select * from Medecin";

    $resultat = $GLOBALS["pdo"]->query($requete);
    $tabMedecins = $resultat->fetchALL();
    ?>


    <form action="" method="post">
    <h2> Sélectionnez votre médecin : </h2>
    <select name="idMedecin">
        <?php
        foreach ($tabMedecins as $Medecin)
        {
            ?>
            <option value = "<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?></option>
            <?php
        }
        ?>
    </select>
    </form>

    <form action = "exo5_post.php" method="post">
    Texte... <input type ="text" name="champ1">
    <input type="submit" name="zioummmm">
    </form>
    <br>

    <?php
    $requete2 = "select * from Patient";

    $resultat2 = $GLOBALS["pdo"]->query($requete2);
    $tabPatient = $resultat2->fetchALL();
    ?>
    <form action="" method="post">
    <h2> Sélectionnez le Patient : </h2>
    <select name="idPatient">
        <?php
        foreach ($tabPatient as $Patient)
        {
            ?>
            <option value = "<?=$Patient["id"]?>"><?=$Patient["nom"]." ".$Patient["prenom"]?></option>
            <?php
        }
        ?>
    </select>
    </form>

<?php
}
catch (Exception $error)
{
    echo "error est : ".$error->getMessage();
}

?>
    
</body>
</html>