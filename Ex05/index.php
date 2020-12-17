<!-- Créer un formulaire sur la page index.php avec :  
Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php. 
Vous avez le choix de la méthode.  -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 7 - Exercice 5</title>
</head>
<body>

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
    
</body>
</html>