<!-- Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché.
Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.   -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 7 - Exercice 6</title>
</head>
<body>

    <?php

    // on teste si le formulaire est vide

    if (empty($_GET['civility']) && empty($_GET['lastname']) && empty($_GET['firstname'])) {

        // si il est vide on l'affiche

        ?>
        <form action="" method="get">

                <label for="civility">Civilité: </label>
                <select name="civility" id="civility">
                    <option value="male">Mr.</option>
                    <option value="female">Mme.</option>
                </select>

                <label for="lastname">Nom: </label>
                <input type="text" id="lastname" name="lastname">

                <label for="firstname">Prénom: </label>
                <input type="text" id="firstname" name="firstname">

                <button type="submit">Envoyer</button>

            </form>
        <?php

        // si il est remplis on affiche ses données

    } else {

        // on stocke les données du formulaire dans des varaibles

        $civility = $_GET['civility'];
        $lastname = $_GET['lastname'];
        $firstname = $_GET['firstname'];

        // on teste la valeur du select et on assigne une string à $gender

        $civility  == 'male'? $gender = 'Mr.' : $gender = 'Mme';

        // on affiche les données
        
        echo 'Bonjour '.$gender.' '.$firstname.' '.$lastname;
        
    }
    ?>
    
</body>
</html>