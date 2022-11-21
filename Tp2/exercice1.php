<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exicice1 tp2</title>
</head>

<body>
    <form action="./exercice1.php" method="post">
        <p>Nom</p>
        <input type="text" name="Nom">

        <p>Age</p>
        <input type="number" name="Age">

        <p>Email</p>
        <input type="email" name="Email">

        <p>Donnation</p>
        <input type="number" name="Donnation">

        <input type="submit" value="Envoyer le don">
    </form>
    <a href="exercice2.php">Resultats</a>

    <?php
if ($_POST != null  && $_POST['Nom']!= null) {
    $nom = $_POST['Nom'];
    $age = $_POST['Age'];
    $email = $_POST['Email'];
    $don = $_POST['Donnation'];
    $fichier = fopen("resultat.txt","a");
    fwrite($fichier,"$nom | $age | $email | $don |\n" );
    fclose($fichier);

}


?>
</body>

</html>