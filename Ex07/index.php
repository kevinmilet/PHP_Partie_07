<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 7 - Exercice 7</title>
</head>
<body>

    <?php

    if (empty($_GET['civility']) && empty($_GET['lastname']) && empty($_GET['firstname'])) {
        ?>
        <form action="index.php" method="get">

                <label for="civility">Civilité: </label>
                <select name="civility" id="civility">
                    <option value="male">Mr.</option>
                    <option value="female">Mme.</option>
                </select>

                <label for="lastname">Nom: </label>
                <input type="text" id="lastname" name="lastname">

                <label for="firstname">Prénom: </label>
                <input type="text" id="firstname" name="firstname">

                <label for="file">Ajouter un fichier</label>
                <input type="file" id="fileInput" name="file">

                <button type="submit">Envoyer</button>

            </form>
        <?php
    } elseif (!empty($_GET['civility']) && !empty($_GET['lastname']) && !empty($_GET['firstname'])) {

        $civility = $_GET['civility'];

        $civility  == 'male'? $gender = 'Mr.' : $gender = 'Mme';

        $lastname = $_GET['lastname'];
        $firstname = $_GET['firstname'];
        $file = $_GET['file'];
        
        echo 'Bonjour '.$gender.' '.$firstname.' '.$lastname;
        echo '<br>';
        echo 'Votre fichier s\'appelle '.$file;
        
    }
    ?>
    
</body>
</html>