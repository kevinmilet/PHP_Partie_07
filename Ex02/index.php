<!-- Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 7 - Exercice 2</title>
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