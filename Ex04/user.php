<!-- Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 7 - Exercice 4</title>
</head>
<body>
    <p>Bonjour <?php echo $_POST["firstname"] . ' ' . $_POST["lastname"];?></p>
    
</body>
</html>