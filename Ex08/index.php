<!-- Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent,
vérifier que le fichier transmis est bien un fichier pdf. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 7 - Exercice 8</title>
</head>
<body>

    <?php

    define('EXT', 'pdf');

    // on teste si le formulaire est vide

    if (empty($_POST['lastname']) && empty($_POST['firstname']) && empty($_FILES['file'])) {

        // si il est vide on affiche le formulaire

        ?>
        
        <form action="index.php" method="post" enctype="multipart/form-data">

                <label for="civility">Civilité: </label>
                <select name="civility" id="civility">
                    <option value="male">Mr.</option>
                    <option value="female">Mme.</option>
                </select>

                <label for="lastname">Nom: </label>
                <input type="text" id="lastname" name="lastname">

                <label for="firstname">Prénom: </label>
                <input type="text" id="firstname" name="firstname">

                <label for="file">Ajouter un PDF</label>
                <input type="file" id="fileInput" name="file" accept=".pdf">

                <button type="submit">Envoyer</button>

            </form>
        <?php

        // si le formulaire est rempli, on affiche ses données

    } else {

        // on récupère les données du forulaire et on les stocke dans des variables

        $civility = $_POST['civility'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $file = $_FILES['file']['name'];
        var_dump($file);

        // pour le select, on test la valeur du selecte on assigne un genre

        $civility  == 'male'? $gender = 'Mr.' : $gender = 'Mme';

        // on récupère l'extension du fichier envoyé
        
        $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

        // on affiche les données du formulaire

        echo 'Bonjour '.$gender.' '.$firstname.' '.$lastname;
        echo '<br>';
        
        // on test si le fichier est bien un pdf 
        // si oui on affiche le nom + l'extension
        // sinon on affiche une erreur

        echo ($fileType != EXT) ? 'Veuillez envoyer un fichier PDF!' : 'Votre fichier s\'appelle '.$file.' <br> C\'est bien un fichier pdf.';
    }
    ?>
    
</body>
</html>