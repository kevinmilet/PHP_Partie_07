<!-- Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 7 - Exercice 3</title>
</head>
<body>
    <p>Bonjour <?= $_GET['firstname'] . ' ' . $_GET['lastname']?></p>
    
</body>
</html>