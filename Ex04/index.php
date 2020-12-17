<!-- Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 7 - Exercice 4</title>
</head>
<body>

    <form action="user.php" method="post">
        <label for="lastname">Nom: </label>
        <input type="text" id="lastname" name="lastname">
        <label for="firstname">Prénom: </label>
        <input type="text" id="firstname" name="firstname">
        <button type="submit">Envoyer</button>
    </form>
    
</body>
</html>