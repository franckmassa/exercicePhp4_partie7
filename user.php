<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice4</title>
    </head>
    <body>
         <?php
        if (!empty($_POST['firstName']) && !empty($_POST['lastName'])) {
            //Récupération des données du formulaire
            echo 'Bonjour ' . $_POST['firstName'] . ' ' . $_POST['lastName'];
        } else {
            echo 'Champs vides';
        }
        ?>
    </body>
</html>
