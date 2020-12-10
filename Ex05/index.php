<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 7 - Exercice 5</title>
</head>
<body>

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

        <button type="submit">Envoyer</button>

    </form>
    
</body>
</html>