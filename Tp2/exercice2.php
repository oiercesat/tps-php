<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2 | tp2</title>
</head>
<body>
    <h1>Merci pour votre don, vous avez reçu un mail de confirmation</h1>
    <?php
    $donTotal=0;
    $ageTotal=0;
    $nbLigne=0;
    $ageMoyen=0;

    $fichier=fopen("resultat.txt","r");

    while (!feof($fichier)) {
        $ligne=fgets($fichier);
        $resultat=explode("|",$ligne);

        $ageTotal=$ageTotal+intval($resultat[1]);
        $donTotal=$donTotal+intval($resultat[3]);
        $nbLigne++;
    }

    fclose($fichier);
    $ageMoyen=$ageTotal/$nbLigne;


    $fichier=fopen("resultat.txt","r");
    while(!feof($fichier)){
        $ligne=fgets($fichier);
        $resultat=explode("|",$ligne);
        $email=$resultat[2];
        $message="Votre don est de".$resultat[3].", le total des dons est de : ".$donTotal.", la moyenne d'âge est de : ".$ageMoyen;
        mail($email,"Récapitulatif de votre don",$message);
    }

    fclose($fichier);
    /*afficher le resultats pour voir le probleme */

    ?>
</body>
</html>